<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class courseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'data' => [
                'id' => $this->id,
                'course' => $this->name,
                'fee/month' => $this->email,
            ],
        ];
    }
}
