<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Product */
class ProductsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => [
                'en' => $this->name,
                'fr' => 'Nada de françês',
            ],
            'description' => [
                'en' => 'banana'
            ]
        ];
    }
}
