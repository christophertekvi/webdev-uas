<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class HomeController extends Controller
{
    // public function upload(Request $request)
    // {
    //     if($request->hasFile('image')){
    //         $filename = $request->image->getClientOriginalName();
    //         $request->image->storeAs('images',$filename,'public');
    //         Auth()->user()->update(['image'=>$filename]);
    //     }
    //     return redirect()->back();
    // }

    // public function update(Request $request, Profile $profile)
    // {
    //     $request->validate([
    //         // 'name' => 'required',
    //         // 'detail' => 'required'
    //     ]);

    //     $input = $request->all();

    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'image/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['image'] = "$profileImage";
    //     }else{
    //         unset($input['image']);
    //     }

    //     $profile->update($input);

    //     return redirect()->route('profiles.index')
    //                     ->with('success','Profile updated successfully');
    // }
}

