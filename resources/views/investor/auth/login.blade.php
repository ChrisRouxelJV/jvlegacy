@extends('layouts.admin')

@section('content')
    <div class="flex min-h-screen justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img src="{{ asset('logo.png') }}" alt="Logo" class="mx-auto h-16 w-auto">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Investor Login</h2>
                <p class="mt-2 text-center text-sm text-gray-600">Sign in to your account</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('investor.login.post') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 space-y-6">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="email" required autofocus
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="current-password" required
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded bg-amber-500 text-white font-bold hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-500">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
