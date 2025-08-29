@extends('layouts.admin')

@section('title', 'Updates - Mass Email')

@section('content')

    <div class="bg-white p-4 rounded shadow mb-6">
        <h1 class="text-xl font-bold mb-4">Confirm Bulk Email for Update: {{ $update->id }}</h1>

    <div class="mb-4 bg-gray-100 p-2 rounded">
        {{ $update->comment_preview }}
    </div>
        <p class="mb-4">You are about to send a bulk email for this update. Please review the recipients below:</p>

        <h2 class="text-lg font-semibold mb-2">Recipients:</h2>
        <ul class="list-disc list-inside">
            @foreach($investorAccounts as $account)
                <li>{{ $account->email }}</li>
            @endforeach
        </ul>

        <form action="{{ route('admin.updates.bulk_email', $update->id) }}" method="POST">
            @csrf
            <button type="submit" class="mt-5 h-10 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">Send Bulk Email</button>

            <a href="{{ route('admin.updates.index') }}" class="ml-6 text-red-500 hover:underline">Cancel</a>
        </form>
    </div>
@endsection