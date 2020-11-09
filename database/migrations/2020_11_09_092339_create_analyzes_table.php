<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reception_id')->nullable()->constrained('receptions');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('laboratory_id')->constrained('laboratories');
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('laboratory_type_id')->constrained('laboratory_types');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('analyzes');
    }
}
