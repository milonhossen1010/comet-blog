<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{
    //Project category index
    public function index()
    {
        $project_category = ProjectCategory::all();
        return view('backend.projects.category', compact('project_category'));
    }

    //Project category store
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required|unique:project_categories'
        ]);

        ProjectCategory::create([
            'name' => $request -> name,
            'slug' => Str::slug($request -> name)
        ]);

        return redirect()->back()->with('success','Category added successful!');
    }

    //Project edit show
    public function edit($id)
    {
        $project = ProjectCategory::find($id);
        return $project;

    }

    //Project update
    public function update(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|unique:project_categories'
        ]);

        $category = ProjectCategory::find($request->id);
        $category -> name = $request->name;
        $category -> slug = Str::slug($request->name);
        $category -> update();

        return redirect()->back()-> with('success', 'Category update successful!');

    }



}
