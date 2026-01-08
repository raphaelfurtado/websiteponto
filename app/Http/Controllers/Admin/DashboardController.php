<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'services' => Service::count(),
            'unread_messages' => ContactMessage::where('status', 'unread')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
