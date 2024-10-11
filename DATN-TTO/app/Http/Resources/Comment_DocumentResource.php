<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Comment_DocumentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'comment_document_id' => $this->id,
            'comment_title' => $this->comment_title,
            'comment_text' => $this->comment_text,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user->id,
            'document_id' => $this->document->id,
            'comment_to' => $this->comment_to
        ];
    }
}
