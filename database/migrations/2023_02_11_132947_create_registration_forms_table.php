<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->id();
            $table->string('Student_name');
            $table->string('Middle_name');
            $table->string('Last_name');
            $table->string('Father_name');
            $table->string('Mother_name');
            $table->string('ID_Number');
            $table->string('BirthMonth');
            $table->string('BirthDay');
            $table->string('Gender');
            $table->string('choose_file');
            $table->string('Religion');
            $table->string('Department');
            $table->string('Phone_no');
            $table->string('Present_Address');
            $table->string('Permanent_Address');
        
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
        Schema::dropIfExists('registration_forms');
    }
}
