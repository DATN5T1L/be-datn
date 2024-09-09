<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'password' => $this->password,
            'fullname' => $this->fullname,
            'age' => $this->age,
            'email' => $this->email,
            'phonenumber' => $this->phonenumber,
            'avatar' => $this->avatar,
            'role' => $this->role,
            'status' => $this->status
        ];
    }
}
