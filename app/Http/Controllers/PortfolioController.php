<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        return view('portfolio.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('portfolio.show', compact('project'));
    }
}
