<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\MemberShip;
use Spatie\Permission\Models\Role;



class MembershipController extends Controller
{
    public function create_child(Request $request)
    {
        return view('membership.child');
    }

    public function create_senior(Request $request)
    {
        return view('membership.senior');
    }

    public function index()
    {

        $userID = Auth::user()->id;
        $memberData = MemberShip::where('account_id', $userID)->get();
        //return $childData;
        return view('membership.index')->with(compact('memberData'));
    }

    public function store(Request $request)
    {

            $data = new Membership;

            $data->account_id = Auth::user()->id;
            $data->address = Request::get('address');
            $data->gender = Request::get('gender');
            $data->first_name = Request::get('first_name');
            $data->last_name = Request::get('last_name');
            $data->date_of_birth = Request::get('date_of_birth');
            $data->membershiptype = Request::get('membershiptype');
            $data->paymenttype = Request::get('paymenttype');
            $data->mobile_phone = Request::get('mobile_phone');
            $data->email = Auth::user()->email;
            $data->regular_teams = 1;

            // EMERGENCT INFO
            $data->emg_title = Request::get('emg_title');
            $data->emg_name = Request::get('emg_name');
            $data->emg_address = Request::get('emg_address');
            $data->emg_relationship = Request::get('emg_relationship');
            $data->emg_con_number = Request::get('emg_con_number');

            //MEDICAL
            $data->medical_doctor = Request::get('medical_doctor');
            $data->medical_surgery = Request::get('medical_surgery');
            $data->medical_allergies = Request::get('medical_allergies');
            $data->medical_allergies_details = Request::get('medical_allergies_details');
            $data->medical_regularmeds = Request::get('medical_regularmeds');
            $data->medical_regularmeds_details = Request::get('medical_regularmeds_details');
            $data->medical_longterm = Request::get('medical_longterm');
            $data->medical_longterm_details = Request::get('medical_longterm_details');
            $data->medical_dietary = Request::get('medical_dietary');
            $data->medical_dietary_details = Request::get('medical_dietary_details');
            $data->medical_physical = Request::get('medical_physical');
            $data->medical_physical_details = Request::get('medical_physical_details');
            $data->medical_consent = Request::get('medical_consent');
            $data->medical_consent_update = Request::get('consent_update');

            // CONSENT
            $data->consent_policies = Request::get('consent_policies');
            $data->consent_photography = Request::get('consent_photography');
            $data->consent_marketing = Request::get('consent_marketing');
            $data->consent_privacy_notice = Request::get('consent_privacy_notice');
            
            // ETH & DIS
            $data->disability_12months = Request::get('disability_12months');
            $data->disability_list = Request::get('disability_list');
            $data->ethnicity = Request::get('ethnicity');

            // CODE
            $data->code_conduct = Request::get('code_conduct');
            $data->declaration = Request::get('declaration');

            // UNDER 18s
            $data->under_medical_loco = Request::get('under_medical_loco');
            $data->school = Request::get('school');
            $data->emg2_name = Request::get('emg2_name');
            $data->emg2_relationship = Request::get('emg2_relationship');
            $data->emg2_con_number = Request::get('emg2_con_number');
            $data->consent_transportation = Request::get('consent_transportation');

            $data->save();


            // redirect
            

        return redirect()->route('account')
            ->with('success', 'Membership added successfully');

    }
    
    /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */

    public function update($id)
    {
            // store

            $data = Membership::find($id);
            $data->account_id = Auth::user()->id;
            $data->address = Request::get('address');
            $data->gender = Request::get('gender');
            $data->first_name = Request::get('first_name');
            $data->last_name = Request::get('last_name');
            $data->date_of_birth = Request::get('date_of_birth');
            $data->membershiptype = Request::get('membershiptype');
            $data->paymenttype = Request::get('paymenttype');
            $data->mobile_phone = Request::get('mobile_phone');

            // EMERGENCT INFO
            $data->emg_title = Request::get('emg_title');
            $data->emg_name = Request::get('emg_name');
            $data->emg_address = Request::get('emg_address');
            $data->emg_relationship = Request::get('emg_relationship');
            $data->emg_con_number = Request::get('emg_con_number');

            //MEDICAL
            $data->medical_doctor = Request::get('medical_doctor');
            $data->medical_surgery = Request::get('medical_surgery');
            $data->medical_allergies = Request::get('medical_allergies');
            $data->medical_allergies_details = Request::get('medical_allergies_details');
            $data->medical_regularmeds = Request::get('medical_regularmeds');
            $data->medical_regularmeds_details = Request::get('medical_regularmeds_details');
            $data->medical_longterm = Request::get('medical_longterm');
            $data->medical_longterm_details = Request::get('medical_longterm_details');
            $data->medical_dietary = Request::get('medical_dietary');
            $data->medical_dietary_details = Request::get('medical_dietary_details');
            $data->medical_physical = Request::get('medical_physical');
            $data->medical_physical_details = Request::get('medical_physical_details');
            $data->medical_consent = Request::get('medical_consent');
            $data->medical_consent_update = Request::get('consent_update');

            // CONSENT
            $data->consent_policies = Request::get('consent_policies');
            $data->consent_photography = Request::get('consent_photography');
            $data->consent_marketing = Request::get('consent_marketing');
            $data->consent_privacy_notice = Request::get('consent_privacy_notice');
            
            // ETH & DIS
            $data->disability_12months = Request::get('disability_12months');
            $data->disability_list = Request::get('disability_list');

            // CODE
            $data->code_conduct = Request::get('code_conduct');
            $data->declaration = Request::get('declaration');

            // UNDER 18s
            $data->under_medical_loco = Request::get('under_medical_loco');
            $data->school = Request::get('school');
            $data->emg2_name = Request::get('emg2_name');
            $data->emg2_relationship = Request::get('emg2_relationship');
            $data->emg2_con_number = Request::get('emg2_con_number');
            $data->consent_transportation = Request::get('consent_transportation');

            $data->save();


            // redirect
            return redirect('account')->with('success', 'This Memership Profile has been updated!');

    }

    public function destroy($id)
    {

        $delete = Membership::where('id', $id)->delete();
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
