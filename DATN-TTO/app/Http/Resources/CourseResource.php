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
        return [
            'course_id' => $this->id,
            'name_course' => $this->name_course,
            'img_course' => $this->img_course,
            'price_course' => $this->price_course,
            'discount_price_course' => $this->discount_price_course,
            'status_course' => $this->status_course,
            'views_course' => $this->views_course,
            'rating_course' => $this->rating_course,
            'num_document' => $this->whenCounted('documents'),
            'num_chapter' => $this->whenCounted('chapters'),
            'tax_rate' => $this->tax_rate,
            'del_flag' => $this->del_flag,
            'instructor_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'chapters' => ChapterResource::collection($this->chapters),
        ];
    }
}
