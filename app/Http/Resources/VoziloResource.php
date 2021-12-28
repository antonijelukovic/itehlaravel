<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VoziloResource extends JsonResource
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
            'registarski_broj' => $this->resource->registarski_broj,
            'godiste' => $this->resource->godiste,
            'kilometraza' => $this->resource->kilometraza,
            'klijent' => new KlijentResource($this->resource->klijent),
            'servis' => new ServisResource($this->resource->servis)
        ];
    }
}
