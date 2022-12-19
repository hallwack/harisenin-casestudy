<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'product_slug', 'price', 'description'];

    public function asset()
    {
        return $this->belongsToMany(Asset::class, 'product_assets', 'product_id', 'asset_id');
    }
}
