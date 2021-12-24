<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServisResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'naziv' => $this->resource->naziv,
            'grad' => $this->resource->grad,
            'adresa' => $this->resource->adresa,
            'broj_zaposlenih' => $this->resource->broj_zaposlenih,
            'website' => $this->resource->website
        ];
    }
}
