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
            'img_course' => $this->img_course,
            'price_course' => $this->price_course,
            'discount_price_course' => $this->discount_price_course,
            'status_course' => $this->status_course,
            'views_course' => $this->views_course,
            'rating_course' => $this->rating_course,
            'num_lesson' => $this->num_lesson,
            'tax_rate' => $this->ax_rate,
            'del_flag' => $this->del_flag,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
