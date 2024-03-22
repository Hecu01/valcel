<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maceta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'peso', 'base', 'altura', 'boca'];
}
