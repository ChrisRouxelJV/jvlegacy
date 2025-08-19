<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Update;
use App\Models\Investments;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(Request $request)
    {
        $query = Update::query();

        // Filter by project_id if provided
        if ($request->filled('project_id')) {
            $query->where('project_id', $request->input('project_id'));
        }

        // Filter by category if provided
        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        $updates = $query->orderByDesc('sent_on')->paginate(20);

        $projects = Project::orderBy('name')->get();

        return view('admin.updates.index', [
            'updates' => $updates,
            'projects' => $projects,
            'filters' => $request->only(['project_id', 'category']),
        ]);
    }

    public function show($id)
    {
        return view('admin.updates.show');
    }
}
