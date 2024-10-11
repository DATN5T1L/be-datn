<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Url_Sub_TitleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'url_sub_title_id' => $this->id,
            'sub_title_video' => $this->sub_title_video,
            'sub_title_url' => $this->sub_title_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'document_id' => $this->document->id
        ];
    }
}
