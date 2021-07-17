<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('cv');
            $table->string('title_1');
            $table->longText('sub_title');
            $table->string('title_2');
            $table->longText('sub_title_2');
            $table->longText('sub_title_3');
            $table->string('list_name_1');
            $table->string('list_description_1');
            $table->string('list_name_2');
            $table->string('list_description_2');
            $table->string('list_name_3');  
            $table->string('list_description_3');  
            $table->string('list_name_4');  
            $table->string('list_description_4');
            $table->string('list_name_5');
            $table->string('list_description_5');
            $table->string('list_name_6');
            $table->string('list_description_6');
            $table->string('list_name_7');  
            $table->string('list_description_7')->nullable();  
            $table->string('list_name_8')->nullable();
            $table->string('list_description_8')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
