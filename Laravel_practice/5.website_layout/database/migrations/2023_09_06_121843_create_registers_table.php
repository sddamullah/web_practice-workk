<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           
                $table->string('mainehead');
                $table->string('headcontant');
                $table->string('firstchart_head');
                $table->string('firstchart_contant');
                $table->string('secondchart_head');
                $table->string('secondchart_contant');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
