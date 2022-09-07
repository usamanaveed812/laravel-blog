<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('post', function (Blueprint $table){
                $table->increments('id')->default('0');
                $table->string('name');
               $table->unsignedBigInteger('user_id');
                $table->string('title');
        
                $table->longText('description');
                $table->string('image');
                $table->tinyInteger('status');
               $table->string('created_at');
               $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
};
