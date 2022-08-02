<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("middle_name");
            $table->date("enrollment_year");
            $table->date("dob");
            $table->enum('gender', ['male', 'female']);
            $table->enum('residential_status', ['Australian Citizen/PR', 'Full-fee paying international student']);
            $table->string("s_m_school");
            $table->string("s_m_school_year_level");
            $table->string("s_p_school");
            $table->string("residential_address");
            $table->string("suburb");
            $table->string("postcode");
            $table->string("father_name");
            $table->string("father_home_phone");
            $table->string("father_mobile_phone");
            $table->string("father_email");
            $table->string("mother_name");
            $table->string("mother_home_phone");
            $table->string("mother_mobile_phone");
            $table->string("mother_email");
            $table->string("emergency_contact_name");
            $table->string("emergency_contact_relation");
            $table->string("emergency_contact_phone");
            $table->enum('medical_conditon', ['Yes', 'No']);
            $table->text("medical_condition_details");
            $table->enum('photo_permissoin', ['Yes', 'No']);
            $table->tinyInteger('parent_agreement');
            $table->tinyInteger('paid');
            $table->string("receipt");
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
        Schema::dropIfExists('students');
    }
}
