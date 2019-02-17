<?php

namespace App\Repositories;

use App\Album;

class AlbumRepository extends BaseRepository
{
    /**
     * Create a new AlbumRepository instance.
     *
     * @param  \App\Models\Album $album
     */
    public function __construct(Album $album)
    {
        $this->model = $album;
    }

    /**
     * Create a new album.
     *
     * @param  \App\Models\User  $user
     * @param  array  $inputs
     * @return void
     */
    public function create($user, array $inputs)
    {
        $user->albums ()->create($inputs);
    }
}
