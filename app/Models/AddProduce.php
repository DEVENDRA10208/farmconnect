<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProduce extends Model
{
    use HasFactory;
    protected $fillable = [
        'produce_name', 'produce_desc', 'produce_price_per_kg', 'produce_certification', 'produce_image'
    ];

}
