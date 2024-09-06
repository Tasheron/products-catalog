<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property float price
 * @property int count
 * @property Property[] properties
 */
class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $attributes = [
        'price' => 0.0,
        'count' => 0,
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'product_properties')->withPivot('value');
    }
}
