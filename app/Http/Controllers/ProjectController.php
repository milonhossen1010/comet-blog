<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store()
    {
        return view('backend.projects.project-create');
    }
}
