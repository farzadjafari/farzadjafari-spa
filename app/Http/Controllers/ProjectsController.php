<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function show(Project $project)
    {
        return $project;
    }
}
