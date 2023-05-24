<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Book;

class Publisher extends Model
{
    use HasFactory;

    public function categories():HasMany{
        return $this->hasMany(Book::class);
    }
}
