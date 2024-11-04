<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class, 'post_profile_likes', 'post_id', 'profile_id');
    }

    public function user(): BelongsTo
    {
        return $this->profile->user();
    }
}
