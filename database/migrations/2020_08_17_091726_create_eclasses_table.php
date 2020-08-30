<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eclasses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->year('year_start')->nullable();
            $table->year('year_end')->nullable();
            $table->unsignedBigInteger('major_id');
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
        Schema::dropIfExists('eclasses');
    }
}
