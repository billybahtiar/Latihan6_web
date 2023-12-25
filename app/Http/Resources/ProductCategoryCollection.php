<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Transform each item in the collection to an array
        return $this->collection->map(function ($item) use ($request) {
            return (new ProductCategoryResource($item))->toArray($request);
        })->all();
    }
}
