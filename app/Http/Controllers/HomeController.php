<?php

namespace App\Http\Controllers;

use App\MemberShip;
use Illuminate\Http\Request;
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
            if (Auth::user()->id == $editAccountView[0]->account_id) {
                return view('account.edit')->with(compact('editAccountView'));
            } else {
                return redirect('account')->with('error', 'This Memership Profile does not belong to your account!');
            }
        }

    }
}
