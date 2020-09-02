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
        dd(request()->all());

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
