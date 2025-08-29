<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Update;
use App\Models\Investments;
use Illuminate\Support\Facades\Mail;
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required|exists:legacy.projects,project_id',
            'category' => 'nullable|integer',
            'comment' => 'required|string',
        ]);

        $update = new Update();
        $update->project_id = $validated['project_id'];
        $update->category = $validated['category'] ?? 3;
        $update->comment = $validated['comment'];
        $update->sent_on = now();
        $update->save();

        // Get all unique investor emails for this project
        $investorAccounts = Investments::where('project_id', $update->project_id)
            ->with('account')
            ->get()
            ->pluck('account')
            ->filter()
            ->unique('email');

        $emails = $investorAccounts->pluck('email')->filter()->all();

        //dd($emails);


        // Prepare email data
        $mailData = [
            'content' => $update->comment,
            'url' => url('/investor/dashboard'),
        ];

        // Only send to first email if local, else send to all
        if (app()->environment('local')) {
            $emails = array_slice($emails, 0, 1);
        }

        foreach ($emails as $email) {
            Mail::send('emails.project_update', $mailData, function ($message) use ($email, $update) {
                $message->to($email)
                    ->subject('New Project Update');
            });
        }

        return redirect()->route('admin.updates.index')
            ->with('success', 'Update posted and investors notified.');
    }

    // Function to send a test email
    public function sendTestEmail()
    {
        $mailData = [
            'content' => 'This is a test email.',
            'url' => url('/investor/dashboard'),
        ];

        Mail::send('emails.project_update', $mailData, function ($message) {
            $message->to('chris@jaevee.co.uk')
                ->subject('Test Project Update');
        });

        return 'Test email sent.';
    }
}
