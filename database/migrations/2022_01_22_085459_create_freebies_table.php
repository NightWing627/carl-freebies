<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreebiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freebies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('category_id')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->longText('content')->nullable(false);
            $table->string('link');
            $table->integer('views')->default(0);
            $table->boolean('is_new');
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
        Schema::dropIfExists('freebies');
    }
}
