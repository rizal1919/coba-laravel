<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category','user'];

    // nama method nya itu sama dengan nama modelnya
    public function category(){
        return $this->belongsTo(Category::class);
        // 1 post itu setidaknya memiliki 1 category
    }

    public function user(){
        return $this->belongsTo(User::class);
        // 1 post setidaknya dimiliki oleh satu penulis
    }
}
