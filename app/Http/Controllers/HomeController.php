<?php

namespace App\Http\Controllers;

use App\MemberShip;
use Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminList()
    {
        $memberData = MemberShip::get();
        $memberDataTotal = MemberShip::count();
        $countMale = MemberShip::where('gender','MALE')->count();
        $countFemale = MemberShip::where('gender','FEMALE')->count();
        //return $childData;
        return view('admin.list')->with(compact('memberData','countMale','countFemale','memberDataTotal'));
    }

    public function adminView($id)
    {
        $detailedView = DB::table("member_ships")->where("id",$id)->get();
        //return $names;
        return view('admin.detailed')->with(compact('detailedView'));
    }

    public function userView($id)
    {
        $viewAccountView = DB::table("member_ships")->where("id",$id)->get();

        if($viewAccountView->isEmpty())
        {
            return redirect('account')->with('error', 'No Membership profile found to edit');
        }
        else
        {
            if (Auth::user()->id == $viewAccountView[0]->account_id) {
                return view('account.view')->with(compact('viewAccountView'));
            } else {
                return redirect('account')->with('error', 'This Memership Profile does not belong to your account!');
            }
        }

    }

    public function userEdit($id)
    {
        $editAccountView = DB::table("member_ships")->where("id",$id)->get();
        if($editAccountView->isEmpty())
        {
            return redirect('account')->with('error', 'No Membership profile found to edit');
        }
        else
        {   
            if ($editAccountView[0]->membershiptype > 3) {
                if (Auth::user()->id == $editAccountView[0]->account_id) {
                    return view('account.edit')->with(compact('editAccountView'));
                } else {
                    return redirect('account')->with('error', 'This Memership Profile does not belong to your account!');
                }
            }
            else
            {
                if (Auth::user()->id == $editAccountView[0]->account_id) {
                    return view('account.childedit')->with(compact('editAccountView'));
                } else {
                    return redirect('account')->with('error', 'This Memership Profile does not belong to your account!');
                }
            }

        }

    }

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
}
