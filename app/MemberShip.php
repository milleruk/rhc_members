<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberShip extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'account_id',
        'name',
        'address',
        'gender',
        'date_of_birth',
        'membershiptype',
        'email',
        'regular_teams',
        // EMERGENCT INFO
        'emg_title',
        'emg_name',
        'emg_address',
        'emg_relationship',
        'emg_con_number',
        //MEDICAL
        'medical_doctor',
        'medical_surgery',
        'medical_allergies',
        'medical_allergies_details',
        'medical_regularmeds',
        'medical_regularmeds_details',
        'medical_longterm',
        'medical_longterm_details',
        'medical_dietary',
        'medical_dietary_details',
        'medical_physical',
        'medical_physical_details',
        // CONSENT
        'consent_policies',
        'consent_photography',
        'consent_marketing',
        'consent_privacy_notice',
        // ETH & DIS
        'ethnicity',
        'disability_12months',
        'disability_list',
        // CODE
        'code_conduct',
        'declaration',
        // UNDER 18s
        'under_medical_loco',
        'school',
        'emg2_title',
        'emg2_name',
        'emg2_address',
        'emg2_relationship',
        'emg2_con_number',
        'emg2_email',
        'consent_transportation',

    ];
}
