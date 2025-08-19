{{-- resources/views/admin/investments/index.blade.php --}}
@extends('layouts.admin')

@section('title', 'Updates')

@section('content')
    <h2 class="text-xl font-bold mb-4">Project Updates</h2>

    <!-- New Update Form -->
    <div class="bg-white p-4 rounded shadow mb-6">
        <h1 class="text-xl font-bold mb-4">Post an update</h1>
        <form method="POST" action="{{ route('admin.updates.store') }}" id="update-form" class="mb-6 space-y-4">
            @csrf
            <div class="flex flex-wrap gap-4">
                <div class="w-full md:w-1/2">
                    <label class="block text-sm font-medium mb-1">Project <span class="text-red-500">*</span></label>
                    <select name="project_id" class="w-full px-3 py-2 border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 rounded-md" required>
                        <option value="" hidden>Select Project</option>
                        @foreach ($projects as $proj)
                            @if ($proj->project_id)
                                <option value="{{ $proj->project_id }}">{{ $proj->project_id }} – {{ $proj->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="w-full md:w-1/2">
                    <input type="number" hidden name="category" value="3" class="w-full px-3 py-2 border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 rounded-md">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Update Content <span class="text-red-500">*</span></label>
                <div id="quill-editor" class="bg-white border border-gray-300 rounded" style="min-height: 150px;"></div>
                <input type="hidden" name="comment" id="comment-input">
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Post Update</button>
            </div>
        </form>

    </div>

    @push('scripts')
    <!-- Quill.js CDN -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var quill = new Quill('#quill-editor', {
                theme: 'snow',
                placeholder: 'Write your project update here...'
            });
            var form = document.getElementById('update-form');
            form.addEventListener('submit', function (e) {
                document.getElementById('comment-input').value = quill.root.innerHTML;
            });
        });
    </script>
    @endpush

    <div>
        <form method="GET" class="mb-4 flex flex-wrap gap-4 items-end">

            <div class="w-full md:w-48">
                <label class="block text-sm font-medium mb-1">Project</label>
                <select name="project_id" class="w-full px-3 py-2 border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 rounded-md">
                    <option value="">All Projects</option>
                    @foreach ($projects as $proj)
                        @if ($proj->project_id)
                            <option value="{{ $proj->project_id }}" @selected(request('project_id') == $proj->project_id)>
                                {{ $proj->project_id }} – {{ $proj->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="w-full md:w-48">
                <label class="block text-sm font-medium mb-1">Category</label>
                <input type="number" name="category" value="{{ request('category') }}" class="w-full px-3 py-2 border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 rounded-md">
            </div>

            <div class="w-full md:w-auto flex gap-2">
                <button type="submit" class="h-10 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">Filter</button>
                <a href="{{ route('admin.updates.index') }}" class="h-10 px-4 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-100 flex items-center justify-center">Clear</a>
            </div>

        </form>
    </div>

    <div class="mt-4">
        {{ $updates->links() }}
    </div>

    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 text-sm text-gray-800">
            <thead class="bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Project</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Sent</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
            @forelse ($updates as $update)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 whitespace-nowrap">{{ $update->id }}</td>
                    <td class="px-4 py-2 whitespace-nowrap">{{ $update->project_id }} – {{ $update->project->name ?? '—' }}</td>
                    <td class="px-4 py-2 whitespace-nowrap">{{ $update->category }}</td>
                    <td class="px-4 py-2 whitespace-nowrap">{{ $update->comment_preview }}</td>
                    <td class="px-4 py-2 whitespace-nowrap">{{ human_date($update->sent_on) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 text-center text-gray-500">No updates found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $updates->links() }}
    </div>
@endsection
