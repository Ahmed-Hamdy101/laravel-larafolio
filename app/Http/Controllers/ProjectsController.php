<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $projects = Project::all();
        return view('project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::with('project')->get();
        return view('project.create',compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //valdite inputs
        $project = $request->validate([
            'name' => 'required|max:255',
            'project_url' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,icon,svg|max:2048',
            'skill_id' => 'required|exists:skills,id',
        ]);
        // validate image
        if($request->hasFile('image')) {
            $project['image'] = $request->file('image')->store('projects', 'public');
        }

        //create new project
        $creatProject = Project::create([
            'name' => $project['name'],
            'image' => $project['image'] ?? null,
            'project_url' => $project['project_url'],
            'skill_id' => $project['skill_id'],
        ]);
        redirect()->route('project.index')->with('success-s', 'Project created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,Project $projects)
    {
        $projectSingle =Project::find($request->id);
        return view('project.show',compact('projectSingle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Project $project)
    {
        $skills = Skill::with('project')->get();
        return view('project.edit',compact(['project','skills']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        // validate inp
        $validated  = $request->validate([
            'name' => ['required','max:255'],
            'image' => ['nullable','image','max:2048'],
            'project_url' => ['required','max:255'],
            'skill_id' => 'required|exists:skills,id',
        ]) ;
        // get image from db
        $imagepath = $project->image;
        // if hasfile
        if ($request->hasFile('image')) {
        // if image match with the image in db go check if it exist in storagr folder
            if ($imagepath && Storage::exists($imagepath)) {
            // delete old image
                Storage::delete($imagepath);
                //  store new image
                $imagepath = $request->file('image')->store('projects', 'public');
            }
        }

        // made update after we validate inputs and updated new images
        $project->update([
            'name' => $validated['name'],
            'image' => $imagepath,
            'project_url' => $validated['project_url'],
            'skill_id' => $validated['skill_id'],
        ]);

        // redirect to route > index
        return redirect()->route('project.index')->with('success-u', 'Project updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Optional: delete related image, logs, etc.
        $project->delete();
        return redirect()->route('project.index')->with('danger-d', 'project deleted successfully!');
    }
}
