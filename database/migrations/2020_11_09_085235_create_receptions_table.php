<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained('clinics');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('doctor_id')->constrained('doctors');
            $table->foreignId('employee_id')->nullable()->constrained('employees');
            $table->foreignId('laboratory_id')->nullable()->constrained('laboratories');
            $table->timestamp('reception_time')->nullable();
            $table->string('descriptions');
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
        Schema::dropIfExists('receptions');
    }
}
