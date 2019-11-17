<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company', 100);
            $table->unsignedInteger('site_id');
            $table->string('district', 100);
            $table->string('location', 100);
            $table->string('status', 100);
            $table->decimal('lat', 8, 6);
            $table->decimal('lng', 8, 6);
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
        Schema::dropIfExists('towers');
    }
}
