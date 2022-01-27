<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToFreebies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('freebies', function (Blueprint $table) {
            //
            $table->string('image')->after('is_new');
            $table->string('thumb')->nullable(true)->after('is_new');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('freebies', function (Blueprint $table) {
            //
            $table->dropColumn(['image', 'thumb']);
        });
    }
}
