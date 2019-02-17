<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->user_id,
            'album_id' => $this->album_id,
            'name' => $this->name,
            'photo_url' => $this->photo_url,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'album' => $this->album,
            'user' => $this->user
        ];
    }
}
