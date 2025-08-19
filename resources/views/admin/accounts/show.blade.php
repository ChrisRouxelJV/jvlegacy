@extends('layouts.admin')

@section('title', 'Accounts - ' . $account->name )


@section('content')
<div class="mx-auto py-10">
    <div class="bg-white shadow rounded-lg p-4 mb-8 w-full">
        <h1 class="text-2xl font-bold mb-4">Account Details</h1>
        <div class="mb-2">
            <span class="font-semibold">Account Name:</span>
            <span>{{ $account->name }}</span>
        </div>
        <div class="mb-2">
            <span class="font-semibold">Account Email:</span>
            <span>{{ $account->email}}</span>
        </div>
        <div class="mb-2">
            <span class="font-semibold">Account Type:</span>
            <span>{{ ucfirst($account->type->name) }}</span>
        </div>
        @if($account->type === 'person')
            <div class="mb-2">
                <span class="font-semibold">First Name:</span>
                <span>{{ $account->first_name }}</span>
            </div>
            <div class="mb-2">
                <span class="font-semibold">Last Name:</span>
                <span>{{ $account->last_name }}</span>
            </div>
        @elseif($account->type === 'company')
            <div class="mb-2">
                <span class="font-semibold">Company Name:</span>
                <span>{{ $account->company_name }}</span>
            </div>
        @endif
    </div>

    <div class="bg-white shadow rounded-lg p-4 mb-8 w-full mt-8">
        <h2 class="text-lg font-semibold mb-2">Admin Actions</h2>
        <form action="{{ route('admin.accounts.updateType', $account->id) }}" method="POST" class="mb-4 flex flex-col sm:flex-row sm:items-center gap-2">
            @csrf
            <label for="type_id" class="font-semibold">Change Account Type:</label>
            <select name="type_id" id="type_id" class="border border-gray-300 rounded px-3 py-2">
                @foreach(\App\Models\AccountType::on('legacy')->orderBy('name')->get() as $type)
                    <option value="{{ $type->id }}" @selected($account->type_id == $type->id)>{{ $type->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-700">Update Type</button>
        </form>
        <form action="{{ route('admin.accounts.updatePassword', $account->id) }}" method="POST" class="flex flex-col sm:flex-row sm:items-center gap-2">
            @csrf
            <label for="password" class="font-semibold">Change Password:</label>
            <input type="password" name="password" id="password" class="border border-gray-300 rounded px-3 py-2" placeholder="New password" required>
            <input type="password" name="password_confirmation" class="border border-gray-300 rounded px-3 py-2" placeholder="Confirm password" required>
            <button type="submit" class="bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-700">Update Password</button>
        </form>
        @if(session('status'))
            <div class="mt-2 text-green-600">{{ session('status') }}</div>
        @endif
    </div>

    <div class="">
        <h2 class="text-xl font-bold mb-4">Investments</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Project</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Paid</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Paid On</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($account->investments as $inv)
                        <tr>
                            <td class="px-4 py-2">{{ $inv->id }}</td>
                            <td class="px-4 py-2">{{ $inv->project->name ?? '-' }}</td>
                            <td class="px-4 py-2">{!! money($inv->amount) !!}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $inv->type_label }}</td>
                            <td class="px-4 py-2">
                                @if($inv->paid)
                                    <span class="text-green-600 font-semibold">Yes</span>
                                @else
                                    <span class="text-red-600 font-semibold">No</span>
                                @endif
                            </td>
                            <td class="px-4 py-2">
                                {{ human_date($inv->paid_on) }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-4 text-center text-gray-500">No investments found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection
