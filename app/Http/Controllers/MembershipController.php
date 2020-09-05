<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store_child(Request $request)
    {
        //dd(request()->all());

        MemberShip::create([


            'account_id' => Auth::user()->id,
            'address' => $request->address,
            'gender' => $request->gender,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'membershiptype' => $request->membershiptype,
            'mobile_phone' => $request->emg_con_number,
            'paymenttype' => $request->paymenttype,
            'email' => Auth::user()->email,
            'regular_teams' => 1,
            // EMERGENCT INFO
            'emg_title' => $request->emg_title,
            'emg_name' => $request->emg_name,
            'emg_address' => $request->emg_address,
            'emg_relationship' => $request->emg_relationship,
            'emg_con_number' => $request->emg_con_number,
            //MEDICAL
            'medical_doctor' => $request->medical_doctor,
            'medical_surgery' => $request->medical_surgery,
            'medical_allergies' => $request->medical_allergies,
            'medical_allergies_details' => $request->medical_allergies_details,
            'medical_regularmeds' => $request->medical_regularmeds,
            'medical_regularmeds_details' => $request->medical_regularmeds_details,
            'medical_longterm' => $request->medical_longterm,
            'medical_longterm_details' => $request->medical_longterm_details,
            'medical_dietary' => $request->medical_dietary,
            'medical_dietary_details' => $request->medical_dietary_details,
            'medical_physical' => $request->medical_physical,
            'medical_physical_details' => $request->medical_physical_details,
            // CONSENT
            'consent_policies' => $request->consent_policies,
            'consent_photography' => $request->consent_photography,
            'consent_marketing' => $request->consent_marketing,
            'consent_privacy_notice' => $request->consent_privacy_notice,
            // ETH & DIS
            'ethnicity' => $request->ethnicity,
            'disability_12months' => $request->disability_12months,
            'disability_list' => $request->disability_list,
            // CODE
            'code_conduct' => $request->code_conduct,
            'declaration' => $request->declaration,
            // UNDER 18s
            'under_medical_loco' => $request->under_medical_loco,
            'school' => $request->school,
            'emg2_name' => $request->emg2_name,
            'emg2_relationship' => $request->emg2_relationship,
            'emg2_con_number' => $request->emg2_con_number,
            'consent_transportation' => $request->consent_transportation
            ]);

        $user = $request->user();
        $user->assignRole('player');

       return redirect()->route('account')
            ->with('success', 'User added successfully');
    }

    public function store_senior(Request $request)
    {
        //dd(request()->all());
        //$dataTeams = $request->input('regular_teams');

        MemberShip::create([


            'account_id' => Auth::user()->id,
            'address' => $request->address,
            'gender' => $request->gender,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'membershiptype' => $request->membershiptype,
            'paymenttype' => $request->paymenttype,
            'email' => Auth::user()->email,
            'regular_teams' => 1,
            'mobile_phone' => $request->mobile_phone,
            // EMERGENCT INFO
            'emg_title' => $request->emg_title,
            'emg_name' => $request->emg_name,
            'emg_address' => $request->emg_address,
            'emg_relationship' => $request->emg_relationship,
            'emg_con_number' => $request->emg_con_number,
            //MEDICAL
            'medical_doctor' => $request->medical_doctor,
            'medical_surgery' => $request->medical_surgery,
            'medical_allergies' => $request->medical_allergies,
            'medical_allergies_details' => $request->medical_allergies_details,
            'medical_regularmeds' => $request->medical_regularmeds,
            'medical_regularmeds_details' => $request->medical_regularmeds_details,
            'medical_longterm' => $request->medical_longterm,
            'medical_longterm_details' => $request->medical_longterm_details,
            'medical_dietary' => $request->medical_dietary,
            'medical_dietary_details' => $request->medical_dietary_details,
            'medical_physical' => $request->medical_physical,
            'medical_physical_details' => $request->medical_physical_details,
            'medical_consent' => $request->medical_consent,
            'medical_consent_update' => $request->consent_update,
            // CONSENT
            'consent_policies' => $request->consent_policies,
            'consent_photography' => $request->consent_photography,
            'consent_marketing' => $request->consent_marketing,
            'consent_privacy_notice' => $request->consent_privacy_notice,
            // ETH & DIS
            'ethnicity' => $request->ethnicity,
            'disability_12months' => $request->disability_12months,
            'disability_list' => $request->disability_list,
            // CODE
            'code_conduct' => $request->code_conduct,
            'declaration' => $request->declaration,
            // UNDER 18s
            'under_medical_loco' => $request->under_medical_loco,
            'school' => $request->school,
            'emg2_name' => $request->emg2_name,
            'emg2_relationship' => $request->emg2_relationship,
            'emg2_con_number' => $request->emg2_con_number,
            'consent_transportation' => $request->consent_transportation
            ]);

        $user = $request->user();
        $user->assignRole('player');

       return redirect()->route('account')
            ->with('success', 'User added successfully');

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

       //         return redirect()->route('account')
       //     ->with('success', 'User deleted successfully');
        //$userID = Auth::user()->id;
        //Membership::find($id)->where("account_id",$userID)->where("id",$id)->delete();
        //return redirect()->route('account')
        //    ->with('success', 'User deleted successfully');
    }
}
