<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Investments;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.projects.index');
    }

    public function show($id)
    {
        return view('admin.projects.show');
    }
}
