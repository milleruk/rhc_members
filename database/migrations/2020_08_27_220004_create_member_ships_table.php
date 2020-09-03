<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_ships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id');
            $table->string('gender');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address',999);
            $table->date('date_of_birth');
            $table->integer('membershiptype');
            $table->string('regular_teams');
            $table->string('email');

            // Emergency Info
            $table->string('emg_title');
            $table->string('emg_name');
            $table->string('emg_address',999);
            $table->string('emg_relationship');
            $table->string('emg_con_number');
            // MEDICAL
            $table->string('medical_doctor');
            $table->string('medical_surgery');
            $table->integer('medical_allergies');
            $table->string('medical_allergies_details')->nullable();
            $table->integer('medical_regularmeds');
            $table->string('medical_regularmeds_details')->nullable();
            $table->integer('medical_longterm');
            $table->string('medical_longterm_details')->nullable();
            $table->integer('medical_dietary');
            $table->string('medical_dietary_details')->nullable();
            $table->integer('medical_physical');
            $table->string('medical_physical_details')->nullable();
            //CONSENT
            $table->integer('consent_policies');
            $table->integer('consent_photography');
            $table->integer('consent_marketing');
            $table->integer('consent_privacy_notice');
            //ETHNICITY & DIS
            $table->string('ethnicity');
            $table->string('disability_12months')->nullable();
            $table->string('disability_list')->nullable();
            // CODE
            $table->integer('code_conduct');
            $table->integer('declaration');
            // UNDER 18s
            $table->integer('under_medical_loco')->nullable();
            $table->string('school',999)->nullable();
            $table->string('emg2_name')->nullable();
            $table->string('emg2_relationship')->nullable();
            $table->string('emg2_con_number')->nullable();
            $table->string('emg2_email')->nullable();
            $table->string('consent_transportation')->nullable();

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
        Schema::dropIfExists('member_ships');
    }
}
