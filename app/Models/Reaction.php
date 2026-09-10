<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reaction extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'ticket_id', 'content'];

    public function tickets(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

}
