<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $table = 'product_review';
    protected $fillable = [
        'product_name', 'review', 'votes',
    ];

}
