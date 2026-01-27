<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'weight',
        'value',
        'company_id',
        'GTIN',
    ];

    public function company()
    {
        return $this->belongsTo(Companies::class);
    }
}
