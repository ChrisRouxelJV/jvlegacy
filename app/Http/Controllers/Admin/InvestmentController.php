<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investments;
use App\Models\Project;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class InvestmentController extends Controller
{
    private function filteredInvestmentsQuery(Request $request)
    {
        $query = Investments::with(['account.person', 'account.company', 'project']);

        // Apply project filter
        if ($request->filled('project_id')) {
            $query->where('project_id', $request->project_id);
        }

        // Apply paid filter
        if ($request->has('paid') && $request->paid !== '') {
            $query->where('paid', $request->paid);
        }

        // Apply name search
        if ($request->filled('search')) {
            $query->whereHas('account', function ($q) use ($request) {
                $q->whereHas('person', fn ($q) => $q->where('first_name', 'like', "%{$request->search}%")
                    ->orWhere('last_name', 'like', "%{$request->search}%"))
                    ->orWhereHas('company', fn ($q) => $q->where('name', 'like', "%{$request->search}%"));
            });
        }

        return $query;
    }

    public function index(Request $request)
    {
        $query = $this->filteredInvestmentsQuery($request);

        $investments = $query->orderByDesc('id')->paginate(25)->withQueryString();

        $projects = Project::whereNotNull('project_id')
            ->where('project_id', '!=', '')
            ->orderBy('project_id')
            ->get(['project_id', 'name']);

        return view('admin.investments.index', compact('investments', 'projects'));
    }


    public function export(Request $request): StreamedResponse
    {
        $query = $this->filteredInvestmentsQuery($request);

        $investments = $query->get();

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=investments.csv',
        ];

        return response()->streamDownload(function () use ($investments) {
            $handle = fopen('php://output', 'w');

            // Header row
            fputcsv($handle, [
                'ID', 'Project ID', 'Project Name', 'Account Name', 'Transfer ID', 'Pay In ID',
                'Amount (£)', 'Type', 'Paid', 'Paid On', 'Reserved Until'
            ]);

            foreach ($investments as $inv) {
                fputcsv($handle, [
                    $inv->id,
                    $inv->project_id,
                    $inv->project->name ?? '',
                    $inv->account->name ?? '',
                    $inv->transfer_id,
                    $inv->pay_in_id,
                    number_format($inv->amount / 100, 2),
                    $inv->type_label,
                    $inv->paid ? 'Yes' : 'No',
                    $inv->paid_on,
                    $inv->reserved_until,
                ]);
            }

            fclose($handle);
        }, 'investments.csv', $headers);
    }
}
