<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->get();
        $featuredProjects = Project::where('is_featured', true)->orderBy('order')->take(3)->get();

        return view('home', compact('services', 'featuredProjects'));
    }
}
