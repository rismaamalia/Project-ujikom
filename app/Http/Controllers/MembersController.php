<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use Session;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Members::orderBy('created_at','desc')->get();
        // dd($members);
        return view('backend.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $members = new Members;
        $members->username = $request->username;
        $members->email = $request->email;
        $members->password = $request->password;
        $members->save();

        return redirect()->route('members.index');
    }

    
    public function storemembers(Request $request)
    {
        $members = new Members;
        $members->username = $request->username;
        $members->email = $request->email;
        $members->password = Hash::make($request->password);
        $members->save();

        return redirect()->route('frontend.booking');
    }

    public function loginmembers(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = Members::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                // Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect()->route('frontend.booking');
            }
            else{
                return redirect()->route('frontend.loginmembers')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect()->route('frontend.loginmembers')->with('alert','Password atau Email, Salah!');
        }
    }

    

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Members::findOrFail($id);
          return view('backend.members.edit', compact('members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $members = Members::findOrFail($id);
          $members->username = $request->username;
        $members->email = $request->email;
        $members->password =  Hash::make($request->password);
        $members->save();

        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $members = Members::findOrFail($id);
       
            $members->delete();
            return redirect()->route('members.index');
    }
}
