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
            $table->string('system_code', 15);
            $table->string('tower_id', 15);
            $table->string('tower_owner', 50);
            $table->string('tower_name', 50);
            $table->string('district', 50);
            $table->string('region', 50);
            $table->double('latitude', 8, 6);
            $table->double('longitude', 8, 6);
            $table->string('coverage', 50);
            $table->string('site_count', 50);
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
