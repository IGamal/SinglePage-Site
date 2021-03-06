<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'Identifier' => $this->id,
            'Name' => $this->name,
            'Path' => $this->path,
            'Slug' => $this->slug,
        ];
    }
}
