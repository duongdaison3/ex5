<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'product_name',
        'product_price',
        'product_image',
        'product_description',
        'product_category',
        'product_stock',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y H:i:s', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('d-m-Y H:i:s', strtotime($value));
    }

    public function setProductNameAttribute($value)
    {
        $this->attributes['product_name'] = ucwords($value);
    }

    public function setProductCategoryAttribute($value)
    {
        $this->attributes['product_category'] = ucwords($value);
    }

    public function setProductDescriptionAttribute($value)
    {
        $this->attributes['product_description'] = ucfirst($value);
    }

    public function setProductPriceAttribute($value)
    {
        $this->attributes['product_price'] = number_format($value, 2);
    }

    public function setProductStockAttribute($value)
    {
        $this->attributes['product_stock'] = (int) $value;
    }
}
