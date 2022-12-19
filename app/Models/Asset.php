<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    use MediaAlly;

    protected $fillable = ['name', 'path', 'size'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'asset_id');
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_assets', 'asset_id', 'product_id');
    }
}
