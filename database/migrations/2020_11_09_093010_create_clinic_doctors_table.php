<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained('clinics');
            $table->foreignId('doctor_id')->constrained('doctors');
            $table->unique(['clinic_id', 'doctor_id']);
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
        Schema::dropIfExists('clinic_doctors');
    }
}
