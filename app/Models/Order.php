<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    //
    protected $table = 'order';
    protected $fillable=['Name','Email','Prod_Id','Customization'];
    public function product():BelongsTo{
        return $this->belongsTo(Product::class);
    }
}
		