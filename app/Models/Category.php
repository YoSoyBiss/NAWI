<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    // Asegúrate de que los campos sean rellenables
    protected $fillable = [
        'name',
        'description',
    ];
}
