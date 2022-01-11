<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sign-up',[
            "title" => "Sign Up"
        ]);
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
            'email' => ['required', 'email:dns'],
            'firstname' => ['required', 'regex:/^[a-zA-Z]+$/u','min:3'],
            'lastname' => ['required', 'regex:/^[a-zA-Z]+$/u'],
            'password' => ['required', 'min:5'],
            'reenterpassword' => ['required', 'min:5']
        ]);
        $email = $request->email;
        $password = $request->password;
        $reenterpassword = $request->reenterpassword;
        if($password === $reenterpassword){
            $userdata = DB::table('pembeli')->where('EMAIL', $email)->first();
            if (is_null($userdata)) {
             $users = DB::select('select `GenIdPembeli`()');
             $obj = get_object_vars($users[0]);
                DB::table('pembeli')->insert([
                'ID_PEMBELI'=>$obj['`GenIdPembeli`()'],
                'FOTO_PEMBELI'=>null,
                'FIRST_NAME'=>$request->firstname,
                'LAST_NAME'=>$request->lastname,
                'NO_HP'=>' ',
                'ALAMAT'=>' ',
                'POIN'=>0,
                'EMAIL'=>$request->email,
                'JENIS_KELAMIN'=>' ',
                'PASSWORD'=>$request->password,
                'PEMBELI_DELETE'=>0
            ]);
            return view('sign-in', ['title' => 'Sign In']);
            }
            else{
                return back()->with('SignUpError', 'Sign Up Failed!');
            }
        }
        else{
            return back()->with('SignUpError', 'Sign Up Failed!');
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
