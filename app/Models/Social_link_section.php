<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_link_section extends Model
{
    use HasFactory;
     protected $fillable = [
        'icon','Link',
    ];
}
