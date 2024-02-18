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
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'featured_image'=>$this->featured_image,
            'gallery'=>$this->gallery,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'status'=>$this->status
           ];
    }
}