<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Name', 45);
            $table->string('LastName', 45);
            $table->integer('Age');
            $table->string('Street', 50);
            $table->integer('HouseNumber');
            $table->string('City', 60);
            $table->string('Country', 60);
            $table->string('PhoneNumber');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
