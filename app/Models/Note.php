<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Note extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['note'];

    public function note(): HasMany
    {
        return $this->HasMany(Book::class);
    }
}