<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelInclude extends Model
{
    use HasFactory;

    protected $table = 'include';
    public $timestamps = false;

    protected $fillable = [
        'num',
        'order_id',
        'product_id'
    ];
}
