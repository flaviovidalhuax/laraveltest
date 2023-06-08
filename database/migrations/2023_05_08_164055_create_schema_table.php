<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->user();
        $this->feacture();
        $this->properties();
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schema');
    }
    public function user(){
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->unsignedInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('properties');
            $table->timestamps();
        });

    }
    public function properties(){
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("img");
            $table->string('price');
            $table->string("room");
            $table->string("bathrooms");
            //other
            $table->foreignId('user_id')->constrained();
            $table->foreignId('feacture_id')->constrained();
            $table->timestamps();
        });
    }
        public function feacture(){
        Schema::create('feactures', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            
            // $table->unsignedInteger('feature_id');
            // $table->foreign('feature_id')->references('id')->on('properties');
        });
    
    }
   
}

