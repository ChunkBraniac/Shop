<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_email',
        'wishlist_id',
        'wishlist_name',
        'wishlist_price',
        'wishlist_image',
    ];
}
