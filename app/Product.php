<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Warehouse;

class Product extends Model
{
    protected $fillable = [
        "name",
        "warehouse_id",
        "price"
    ];
    public function warehouse(){
        return $this->belongsTo(warehouse::class);
    }
}
