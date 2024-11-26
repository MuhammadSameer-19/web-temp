<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Products';
    protected $fillable=['Pro_Name','Pro_Detail','Pro_Category','Pro_Price',	'Pro_Img'];
}
