<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialityTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speciality_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('speciality_id')->constrained('specialities')->onDelete('cascade');
            $table->string('name');
            $table->string('description');

            $table->string('locale')->index();
            $table->unique(['speciality_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speciality_translations');
    }
}
