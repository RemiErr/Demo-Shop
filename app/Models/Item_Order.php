<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'include_item_id',
        'include_user_id',
        'include_order_id',
    ];
}
