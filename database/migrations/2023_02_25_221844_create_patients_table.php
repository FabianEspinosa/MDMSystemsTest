<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('TYPE');
            $table->integer('PTNO');
            $table->string('SALUTATION');
            $table->string('PATIENT_NAME');
            $table->string('GENDER');
            $table->string('NATIONALITY');
            $table->string('REGION');
            $table->dateTime('REGISTRED_DATE');
            $table->dateTime('EDIT_DATE');
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
        Schema::dropIfExists('patiens');
    }
}
