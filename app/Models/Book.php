<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = ['title', 'slug', 'user_id'];
    protected $with = ['modules'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }
}
