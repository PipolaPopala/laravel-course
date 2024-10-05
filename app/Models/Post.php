<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    protected $guarded = false; // более популярный подход, но, чтобы не писать эту строчку в каждой можели внесём изменения в AppServiceProvider

//    protected $fillable = [
//        'title',
//        'content',
//        'description',
//        'author',
//        'like',
//        'views',
//        'category',
//        'tag',
//        'is_active',
//        'published_at',
//    ];
// этот подход позволяет на этом этапе профильтровать полученный массив и в итоге добавить запись именно с указанными здесь полями, остальные просто игнорируются, выглядит более защищённым вариантом, но, используется реже, наверное, потому что больше кода писать нужно

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function likes()
    {
        return $this->belongsToMany(Profile::class, 'post_profile_likes', 'post_id', 'profile_id');
    }
}
