<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\UpdateRequest;

class ProfileController extends Controller
{
    public function profilePage()
    {
        $user = auth()->user();
        return view('auth.updateProfile', compact('user'));
    }

    public function profileStore(UpdateRequest $request)
    {
        $user = auth()->user();
        try{

            if(! $request->password){
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email
                ]);
            }else{
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
            }
    
            $request->session()->flash('alert-success', 'Profile Updated Successfully');
        }
        catch(\Exception $ex){
            return back()->withErrors($ex->getMessage());
        }
        return to_route('auth.profilePage');
    }
}
