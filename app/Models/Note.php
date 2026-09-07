<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'category_id', 'title', 'issue', 'status'];

    public function ticket() {
        return $this->belongsTo(Ticket::class);
    }
}
