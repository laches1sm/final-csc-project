<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table){

            $table->unsignedInteger('comment_id')->autoIncrement();
            $table->string('comment_title');
            $table->longText('comment_body');
            $table->integer('rating');
            $table->boolean('approved');
            $table->timestamp('created_at')->nullable();    
            $table->timestamp('updated_at')->nullable();
            

        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');

    }
}
