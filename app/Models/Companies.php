<?php

namespace App\Models;

use App\Http\Controllers\ProductsController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companies extends Model
{
    use SoftDeletes;

    const DELETED_AT = 'deleted_at';
    protected $table = 'companies';
    protected $fillable = [
        'email',
        'address',
        'phone',
        'name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'company_id', 'id');
    }
}
