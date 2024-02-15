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
       return[
        'id'=>$this->id,
        'title'=>$this->title,
        'content'=>$this->content,
        'featured_image'=>$this->featured_image,
        'gallery'=>$this->gallery,
        'publish_at'=>$this->publish_at,
        'published'=>$this->published
       ];

    }
}
