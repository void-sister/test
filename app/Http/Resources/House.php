<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class House extends Resource
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
             'name' => $this->name,
             'price' => (int) $this->price,
             'bedrooms' => (int) $this->bedrooms,
             'bathrooms' => (int) $this->bathrooms,
             'storeys' => (int) $this->storeys,
             'garages' => (int) $this->garages,
         ];
     }
}
