<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestorDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $account = auth('investor')->user();

        $investments = $account->investments()
            ->with('project')
            ->where('paid', 1)
            ->get()
            ->groupBy('project_id');

        // For each project, get paginated updates
        $projectUpdates = [];
        $perPage = 5;
        foreach ($investments as $projectId => $projectInvestments) {
            $project = $projectInvestments->first()->project;
            if ($project) {
                // Use a unique page parameter for each project
                $pageParam = 'updates_page_' . $projectId;
                $page = request()->input($pageParam, 1);
                $updatesQuery = $project->updates()->where('category', 3)->orderByDesc('sent_on');
                $projectUpdates[$projectId] = $updatesQuery->paginate($perPage, ['*'], $pageParam, $page);
            }
        }

        return view('investor.dashboard', compact('account', 'investments', 'projectUpdates'));
    }
}
