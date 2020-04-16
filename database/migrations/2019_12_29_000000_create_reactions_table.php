<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->bigIncrements('id');   
            $table->morphs('reactable')->nullable(); 
            $table->nullableMorphs('reactor')->default(0);
            $table->boolean('liked')->default(false); 
            $table->boolean('disliked')->default(false); 
            $table->unsignedBigInteger('vote')->default(0);
            $table->ipAddress('ip')->nullable();
            $table->text('ips')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reactions');
    }
}
