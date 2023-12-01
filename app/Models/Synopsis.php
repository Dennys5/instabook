<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Synopsis extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['synopsis'];

    public function book(): HasMany
    {
        return $this->HasMany(Book::class);
    }
}
