<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChapterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'chapter_id' => $this->id,
            'name_chapter' => $this->name_chapter,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'documents' => DocumentResource::collection($this->documents),
        ];
    }
}
