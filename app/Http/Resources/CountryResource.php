<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'iso3' => $this->resource->iso,
            'name' => $this->resource->name,
            'capital' => $this->resource->capital,
            'population' => $this->resource->population,
            'area' => $this->resource->area,
            'flag' => $this->resource->flag,
        ];
    }
}
