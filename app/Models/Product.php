<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = 'Products';
    protected $fillable=['Pro_Name','Pro_Detail','Pro_Category','Pro_Price','Pro_Img'];

    public function order():HasMany{
        return $this->hasMany(Order::class);
    }
}
