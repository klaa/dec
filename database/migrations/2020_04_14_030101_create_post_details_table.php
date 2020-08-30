<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePostDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_details', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
            $table->char('language');
            $table->string('name');
            $table->text('body');
            $table->string('keywords')->nullable();
            $table->text('desc')->nullable();
            $table->string('title')->nullable();            
            $table->timestamps();

            $table->primary(['post_id','language']);
        });

        DB::statement('ALTER TABLE post_details ADD FULLTEXT `post_fts_body` (`body`)');
        DB::statement('ALTER TABLE post_details ADD FULLTEXT `post_fts_name` (`name`)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_details');
    }
}
