<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property Product[] products
 * @property string value
 */
class Property extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_properties')->withPivot('value');
    }

    public function value()
    {
        return $this->pivot->value;
    }
}
