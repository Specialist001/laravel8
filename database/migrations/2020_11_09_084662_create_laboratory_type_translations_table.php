<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoryTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratory_type_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laboratory_type_id')->constrained('laboratory_types')->onDelete('cascade');
            $table->string('name');
            $table->string('description');

            $table->string('locale')->index();
            $table->unique(['laboratory_type_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratory_type_translations');
    }
}
