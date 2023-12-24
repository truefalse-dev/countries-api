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
            'id'        => $this->resource->id,
            'alias'     => $this->resource->alias_name,
            'continent' => $this->resource->continent,
            'name'      => $this->resource->name,
            'capital'   => $this->resource->capital,
            'population' => $this->resource->population,
            'area'      => $this->resource->area,
            'flags'     => url('storage/flags/' . $this->resource->flags),
            'languages' => $this->resource->languages,
        ];
    }
}
