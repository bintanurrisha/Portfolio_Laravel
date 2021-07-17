<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill_section extends Model
{
    use HasFactory;
     protected $fillable = [
        'skill','score',
    ];
}
