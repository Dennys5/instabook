<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['comment', 'user_id', 'book_id'];

    public function book(): HasMany
    {
        return $this->HasMany(Book::class);
    }
}
