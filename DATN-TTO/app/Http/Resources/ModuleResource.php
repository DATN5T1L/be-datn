<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ModuleResource extends JsonResource
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
            'route_id' => new RouteResource($this->whenLoaded('route_id')),
            'course_id' => new CourseResource($this->whenLoaded('course_id')),
        ];
    }
}
