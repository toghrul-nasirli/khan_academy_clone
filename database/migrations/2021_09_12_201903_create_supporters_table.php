<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportersTable extends Migration
{
    public function up()
    {
        Schema::create('supporters', function (Blueprint $table) {
            $table->id();
            $table->boolean('covid_19');
            $table->string('logo')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supporters');
    }
}
