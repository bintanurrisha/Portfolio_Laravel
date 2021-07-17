<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_section extends Model
{
    use HasFactory;
     protected $fillable = [
        'icon','Title','description','long_description'
    ];
}
