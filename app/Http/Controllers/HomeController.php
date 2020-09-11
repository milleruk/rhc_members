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
}
