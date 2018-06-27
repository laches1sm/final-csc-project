<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('events', function (Blueprint $table){
            $table->unsignedInteger('event_id')->autoIncrement();
            $table->string('title');
            $table->longText('description_long');
            $table->mediumText('description_short');
            $table->string('interest_1');
            $table->string('interest_2');
            $table->time('time');
            $table->string('loc_string');
            $table->decimal('lat');
            $table->decimal('long');
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
        Schema::dropIfExists('events');
    }
}
