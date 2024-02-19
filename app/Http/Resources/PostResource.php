<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $galleries = [];
        foreach ($this->gallery as $image) {
            $galleries[] = url('/').'/storage/'.$image;
        }
      //  dd($galleries)
       
        return[
        'id'=>$this->id,
        'title'=>$this->title,
        'content'=>$this->content,
        'featured_image'=> url('/').'/storage/'.$this->featured_image,
        'gallery'=>$galleries,
        'publish_at'=>$this->publish_at,
        'published'=>$this->published
       ];

    }
}
