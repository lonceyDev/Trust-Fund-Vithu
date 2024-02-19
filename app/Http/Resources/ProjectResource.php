<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
          //  dd($galleries);

        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'featured_image'=> url('/').'/storage/'.$this->featured_image,
            'gallery'=>$galleries,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'status'=>$this->status
           ];
    }
}
