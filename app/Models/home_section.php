<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_section extends Model
{
      use HasFactory;
    protected $fillable = [
        'title_1','title_2','sub_title','bc_img','button'
    ];
  
}
