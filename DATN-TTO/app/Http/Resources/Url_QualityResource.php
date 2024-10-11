<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Url_QualityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'url_quality_id' => $this->id,
            'quality_video' => $this->quality_video,
            'quality_url' => $this->quality_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'document_id' => $this->document->id
        ];
    }
}
