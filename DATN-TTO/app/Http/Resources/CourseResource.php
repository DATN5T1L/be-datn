<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'name_course' => $this->name_course,
            'discription_course' => $this->discription_course,
            'img_course' => $this->img_course,
            'price_course' => $this->price_course,
            'state_course' => $this->state_course,
            'certify_course' => $this->certify_course,
            // 'users' => new UserResource($this->whenLoaded('users')),
        ];
    }
}
