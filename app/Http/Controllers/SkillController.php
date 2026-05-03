<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $skills =Skill::paginate(10);
        return view('skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // go to create view
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate inputs
        $skillValidate = $request->validate([
            'name'=> 'required|string|max:255',
            'image' => 'required|image',
        ]);
        // if image exist
         if ($request->hasFile('image')){
             $skillValidate['image'] =$request->file('image')->store('skills', 'public');
         }

        //store image and name with keys after validation
        $skill = Skill::create([
            'name' => $skillValidate['name'],
            'image' => $skillValidate['image'] ?? null,
        ]);

        redirect()->route('skills.index')->with('success', 'Skill created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        $findSkills = Skill::find($skill);
        return view('skills.show',compact('findSkills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //validation
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image'],
        ]);


        // Delete old image if new one is uploaded
        $image = $skill->image;
        // if image is exist
        if ($request->hasFile('image')) {
            // if image in model and exist in storage
            if ($skill->image && Storage::exists($skill->image)) {
            // delete old image
                Storage::delete($skill->image);
                //
                $image = $request->file('image')->store('skills', 'public');
            }
        }

        $skill->update([
            'name' => $validated['name'],
            'image' => $image,
        ]);
        return redirect()->route('skills.index')->with('success', 'Skill updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        // Optional: delete related image, logs, etc.
        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'Skill deleted successfully!');
    }

}
