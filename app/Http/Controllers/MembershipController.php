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
        //$user = $request->user();
        //$user->assignRole('player');
        return view('membership.child');
    }

    public function create_senior()
    {
        return view('membership.child');
    }

    public function index()
    {

        $userID = Auth::user()->id;
        $childData = MemberShip::where('account_id', $userID)->get();
        //return $childData;
        return view('membership.index')->with(compact('childData'));
    }

    public function store_child(Request $request)
    {

        MemberShip::create([


        'account_id' => Auth::user()->id,
        'name' => $request->name,
        'address' => $request->address,
        'gender' => $request->gender,
        'date_of_birth' => $request->date_of_birth,
        'membershiptype' => $request->membershiptype,
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
        'medical_updates' => $request->medical_updates,
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
        'emg2_title' => $request->emg2_title,
        'emg2_name' => $request->emg2_name,
        'emg2_address' => $request->emg2_address,
        'emg2_relationship' => $request->emg2_relationship,
        'emg2_con_number' => $request->emg2_con_number,
        'emg2_email' => $request->emg2_email,
        'consent_transportation' => $request->consent_transportation,
        ]);

        return redirect('/home');
    }

    public function store_senior(Request $request)
    {

        MemberShip::create([

        'account_id' => Auth::user()->id,
        'child_name' => $request->child_name,
        'child_address' => $request->child_address,
        'school' => $request->school,
        'parent_name' => $request->parent_name,
        'parent_address' => $request->parent_address,
        'parent_relationship' => $request->relationship,
        'contacnt number' => $request->contact_number,
        'parent_email' => Auth::user()->email,
        'second_contact_name' => $request->second_contact_name,
        'second_contact_number' => $request->second_contact_number,
        'doctor' => $request->doctors,
        'surgery' => $request->surgery,
        'allergies' => $request->allergies

        ]);

        return redirect('/home');
    }

    public function destroy($id)
    {

        $userID = Auth::user()->id;
        Membership::find($id)->where("account_id",$userID)->where("id",$id)->delete();
        return redirect()->route('home')
            ->with('success', 'User deleted successfully');
    }
}
