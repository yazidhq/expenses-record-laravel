<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'amount',
        'description',
        'date',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($expenses) {
            $originalSlug = $slug = Str::slug($expenses->title);
            $count = 1;
            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            $expenses->slug = $slug;
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
