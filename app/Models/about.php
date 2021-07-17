<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $fillable = [
        'img','cv','title_1','sub_title','title_2','sub_title_2','sub_title_3','list_name_1','list_description_1',
        'list_name_2','list_description_2','list_name_3','list_description_3','list_name_4','list_description_4','list_name_5'
        ,'list_description_5','list_name_6','list_description_6','list_name_7','list_description_7','list_name_8','list_description_8',
       
    ];
}
