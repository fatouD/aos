<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Resources\PhotoResource;
use App\Photos as photomodel;
use Illuminate\Http\Request;

class PhotoControllerV extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }



    public function store(Request $request, Album $album)
    {
        // Get filename with extension
        $filenameWithExt = $request->file('photo')->getClientOriginalName();

        // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Get extension
        $extension = $request->file('photo')->getClientOriginalExtension();

        // Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        // Uplaod image
        $path= $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $filenameToStore);

        $photo = Photos::firstOrCreate(
            [
                'user_id' => $request->user()->id,
                'album_id' => $request->input('album_id'),
            ],
            [
                'name' => $filename,
                'photo_url' => $filenameToStore,
            ]
        );

       // TU mets ton return view....
    }
    /**
     * Display the specified resource.
     *
     * @param  \http\Env\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $photo = Photos::find($request->get('id')) ;
        if ($request->user()->id !== $photo->user_id) {
            return response()->json(['error' => 'You can only show your own photo.'], 403);
        }

        // TU mets ton return view....
    }

}
