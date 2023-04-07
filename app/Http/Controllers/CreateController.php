<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function newProject(Request $request)
    {
        if(request()->isMethod('get')){
            $user = User::find(2);

            return view('create.new-project', compact('user'));
        }

        // dd($request);

        $project = new Project;
        $project->title       = $request->title;
        $project->description = $request->description;
        $project->date        = $request->date;
        

        $path = 'public/project';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($request->image);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);


        $project->image = $base64;


        // dd($project);

        $project->save();

        return redirect()->route('home.index')->with('success','Berhasil Menambah Projek Baru!');
    }
    
}
