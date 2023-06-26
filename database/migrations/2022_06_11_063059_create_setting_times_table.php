<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('setting_times', function (Blueprint $table) {
            $table->id();
            $table->enum('time', ['on', 'off']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('setting_times');
    }
};
