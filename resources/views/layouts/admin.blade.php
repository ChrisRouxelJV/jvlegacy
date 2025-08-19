<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin – @yield('title')</title>

    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 text-sm text-gray-900">
<header class="bg-white shadow p-4 mb-6">
    <div class="max-w-6xl mx-auto flex flex-row justify-between">
        <h1 class="text-xl font-semibold">JaeVee System</h1>
        @php
            $account = Auth::user();
        @endphp
        @if($account)
            <nav class="flex flex-row gap-4">
                
                @if(in_array($account->type_id, [1,2,3]))
                    <a href="{{ route('admin.investments.index') }}">Investments</a>
                    <a href="{{ route('admin.updates.index') }}">Updates</a>
                    <a href="{{ route('admin.accounts.index') }}">Accounts</a>
                @elseif($account->type_id == 8)
                    <a href="{{ route('admin.accounts.show', $account->id) }}">My Account</a>
                @endif
                <form action="{{ route('investor.logout') }}" method="POST" class="inline-block ml-4">
                    @csrf
                    <button type="submit" class="text-red-600 underline">Logout {{ $account->email }}</button>
                </form>
            </nav>
        @endif
    </div>
</header>

@if (session()->has('masquerading_from_admin'))
    <div class="bg-yellow-100 text-yellow-800 px-4 py-2 text-sm text-center">
        You are currently masquerading as account #{{ auth('investor')->id() }}.
        <form action="{{ route('investor.stopMasquerade') }}" method="POST" class="inline-block ml-2">
            @csrf
            <button class="text-blue-600 underline">Return to admin</button>
        </form>
    </div>
@endif

<main class="max-w-6xl mx-auto px-4">
    @yield('content')
</main>
</body>
</html>
