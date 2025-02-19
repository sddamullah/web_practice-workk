<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('menu_registers', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->string('detail');
            $table->string('price');
            
            $table->string('catagory_name')->nullable();
           
            $table->mediumText('img');
         

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
        Schema::dropIfExists('menu_registers');
    }
}
