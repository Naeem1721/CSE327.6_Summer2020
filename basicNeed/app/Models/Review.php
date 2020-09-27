<?php

namespace App\Models;



class Review extends Model
{
 protected $fillable =
      ['product_id', 
       'user_id', 
       'rating', 
       'comment'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}