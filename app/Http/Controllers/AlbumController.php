<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Repositories\AlbumRepository;

use App\Album ;
use App\Http\Resources\AlbumResource;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    
    public function __construct()
    {
       // $this->middleware('auth:api')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        //
        return AlbumResource::collection(Album::with('photos')->paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = Album::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $album ->save();
     
        //return back()->with ('ok', __ ("L'album a bien été enregistré"));
        //return redirect('/upload');
        return $album;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return new AlbumResource($album);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Album  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        if ($request->user()->id !== $album->user_id) {
            return response()->json(['error' => 'You can only edit your own books.'], 403);
        }

        $album->update($request->only(['name', 'description']));

        return new AlbumResource($album);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Album  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return response()->json(null, 204);
    }
}
