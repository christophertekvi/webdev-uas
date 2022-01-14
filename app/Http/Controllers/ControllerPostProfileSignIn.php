<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerPostProfileSignIn extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['min:5'],
            'new_password' => ['min:5'],
            'new_password_confirmation' =>['min:5']
            ]);
            $userdata = DB::table('pembeli')->where('ID_PEMBELI', session('idPembeli'))->first();
            $obj = get_object_vars($userdata);
            if($obj['PASSWORD'] == $request->current_password){
                if($request->new_password == $request->new_password_confirmation){
                    DB::table('pembeli')
                    ->where('ID_PEMBELI', session('idPembeli'))
                    ->update(array('PASSWORD' => $request->new_password_confirmation));
                    return back()->with('PasswordChanged', 'Password Has Changed!');
                }
                else{
                    return back()->with('ChangePasswordError', 'Change Password Failed');
                }
            }
            else {
                return back()->with('ChangePasswordError', 'Change Password Failed');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
