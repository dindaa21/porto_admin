<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Profile;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $user = User::find(2);

        $title = Dashboard::first();
        $title = $title->title;

        $profile = Profile::first();

        $project = Project::get();

        return view('home', compact('title', 'profile', 'project', 'user'));
    }
    
    public function portofolio()
    {
        $user = User::find(2);

        $project = Project::get();

        return view('porto', compact('project', 'user'));
    }
    
    public function contactMe()
    {
        $user = User::find(2);

        return view('contact-me', compact('user'));
    }
    
}
