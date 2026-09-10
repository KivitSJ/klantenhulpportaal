<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'category_id', 'title', 'issue', 'status'];

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo  
    {
        return $this->belongsTo(User::class);
    }

    public function notes(): HasMany 
    {
        return $this->hasMany(Note::class);
    }

    public function reactions(): HasMany  
    {
        return $this->hasMany(Reaction::class);
    }
}
