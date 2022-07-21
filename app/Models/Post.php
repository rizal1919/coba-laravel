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


    // disini kita akan memanfaatkan scopeFilter() yang pasti terhubung ke bag.method index() di controller post
    // nah cara pembuatan scope ini sebenarnya scope itu wajib, tapi bag. Filter itu bebas.
    // misalnya bisa dibuat scopeNama(), scopeMahasiswa() yang penting inisial scope nya ada
    public function scopeFilter($query, array $filters)
    {
        

        // if(request('search')){
        //     return $query->where('title', 'like', '%' . request('search') . '%')
        //                 ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        
        // kalau di dalam variavel filters ini ada search, maka ambil apapun yang ada di dalam search nya, tapi kalau ga ada false. supaya bag. return ga dikerjain (querynya ga dikerjain)
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                 ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        //ini pake Null Coalescing Operator digunakan saat kita butuh menggunakan ternary dan digunakan untuk ngecek isset()
        $query->when($filters['search'] ?? false, function($query, $search){

            return $query->where(function($query) use ($search){

                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
            
        });

        $query->when($filters['category'] ?? false, function($query, $category){

            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, function($query, $user){

            return $query->whereHas('user', function($query) use ($user){
                $query->where('username', $user);
            });
        });
    }
}
