<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class   SponsorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'duration' => $this->duration,
            'price' => $this->price,
        ];
    }
}
