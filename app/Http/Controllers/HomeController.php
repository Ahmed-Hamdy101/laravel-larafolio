<?php

namespace App\Http\Controllers;

use App\Models\c;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {// invoke function to make the controller invokable
        $skills = Skill::all();
        $projects = Project::all();
        return view('home.home',compact('skills','projects'));
    }


}
