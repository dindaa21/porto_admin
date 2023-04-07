<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Profile;
use App\Models\Socmed;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function mainTitle(Request $request)
    {
        $dashboard = Dashboard::first();
        $dashboard->title = $request->title;
        $dashboard->update();

        return back()->with('success', 'Berhasil mengubah data!');
    }
   
    public function profileDesc(Request $request)
    {
        $profile = Profile::first();
        $profile->description = $request->desc;
        $profile->update();

        return back()->with('success', 'Berhasil mengubah data!');
    }
   
    public function profile(Request $request)
    {
        $user = User::find(2);

        if(request()->isMethod('get')){
            return view('profile', compact('user'));
        }

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->update();

        return back()->with('success', 'Berhasil mengubah data!');
    }

    public function sosmed(Request $request)
    {
        $user = User::find(2);
        if(request()->isMethod('get')){
            return view('sosmed', compact('user'));
        }

        if($request->instagram){
            $socmed = Socmed::where('category', 'instagram')->first();
            $socmed->link = $request->instagram;
            $socmed->update();
        }
        elseif($request->twitter){
            $socmed = Socmed::where('category', 'twitter')->first();
            $socmed->link = $request->twitter;
            $socmed->update();
        }
        elseif($request->linkedin){
            $socmed = Socmed::where('category', 'linkedin')->first();
            $socmed->link = $request->linkedin;
            $socmed->update();
        }

        return redirect()->route('home.index')->with('success', 'Berhasil Mengubah Link Sosial Media Kamu!');
    }
}
