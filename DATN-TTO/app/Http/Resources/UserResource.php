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
        return [
            'user_id' => $this -> id,
            'username' => $this -> username,
            'password' => $this -> password,
            'fullname' => $this -> fullname,
            'age' => $this -> age,
            'email' => $this -> email,
            'avatar' => $this -> avatar,
            'phonenumber' => $this -> phonenumber,
            'balance' => $this -> balance,
            'PIN' => $this -> PIN,
            'status_provider' => $this -> status_provider,
            'provider_id' => $this -> provider_id,
            'created_at' => $this -> created_at,
            'updated_at' => $this -> updated_at,
            
        ];
    }
}
