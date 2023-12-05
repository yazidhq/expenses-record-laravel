<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expenses extends Model
{
    use HasFactory;

    protected $table = 'expenses';

    protected $fillable = [
        'title',
        'slug',
        'amount',
        'description',
        'date',
        'category',
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
}
