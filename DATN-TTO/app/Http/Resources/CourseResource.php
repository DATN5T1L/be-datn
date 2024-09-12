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
            'status_course' => $this->status_course,
            'certify_course' => $this->certify_course,
            'chapters_count' => $this->chapters_count,
            'assignments_count' => $this->assignments_count
        ];
    }
}
