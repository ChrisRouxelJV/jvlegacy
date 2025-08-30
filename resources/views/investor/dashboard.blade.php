@extends('layouts.app')

@section('content')

    <div class="mx-auto mt-10" x-data="updateModal()">
        <h1 class="text-2xl font-bold mb-4">Welcome, {{ $account->name }}</h1>

        <p class="text-gray-700 mb-4">Here’s your investor dashboard. From here, you’ll be able to view your investment history and download documents related to your projects.</p>

        <div class="mb-6 bg-yellow-100 border-l-4 border-yellow-400 p-4 rounded-xl">
            <div class="text-yellow-800 font-semibold mb-1">Notice</div>
            <div class="text-yellow-700 text-sm">
                Viewing documents online is currently unavailable. Please bear with us as we work to fix the issue.
            </div>
        </div>

        <h2 class="text-3xl mb-8">Your Investments</h2>

        @foreach ($investments as $projectId => $projectInvestments)
            <h3 class="text-2xl mb-4">{{ $projectInvestments->first()->project->name ?? 'Unknown Project' }}</h3>
            @php $project = $projectInvestments->first()->project; @endphp

            <div class="bg-white rounded shadow overflow-x-auto mb-8">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Amount
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Documents
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($projectInvestments as $inv)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    <p class="text-2xl">{!! money($inv->amount) !!}</p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ human_date($inv->paid_on) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $inv->type_label }}
                                </td>
                                <td class="px-6 py-4 w-16 whitespace-nowrap text-sm text-stone-300 underline">
                                    <div class="flex flex-row">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.621 9.879a3 3 0 0 0-5.02 2.897l.164.609a4.5 4.5 0 0 1-.108 2.676l-.157.439.44-.22a2.863 2.863 0 0 1 2.185-.155c.72.24 1.507.184 2.186-.155L15 18M8.25 15.75H12m-1.5-13.5H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @php $updates = $projectUpdates[$projectId] ?? null; @endphp
            @if($updates && $updates->count())
                <div class="mb-4 bg-gray-50 border-l-4 border-blue-400 p-4">
                    <h4 class="font-semibold mb-2 text-blue-700">Project Updates</h4>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 text-left">Date</th>
                                    <th class="px-4 py-2 text-left">Update</th>
                                    <th class="px-4 py-2 text-left w-24"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($updates as $update)
                                    <tr>
                                        <td class="px-4 py-2 whitespace-nowrap font-semibold">{{ $update->sent_on ? $update->sent_on->format('d M Y') : '' }}</td>
                                        <td class="px-4 py-2">
                                            {!! nl2br(e($update->comment_preview ?? '')) !!}
                                        </td>
                                        <td>
                                            <button 
                                                class="ml-2 text-white bg-indigo-600 hover:bg-indigo-700 text-xs font-semibold py-1 px-2 rounded" 
                                                @click="showUpdate({{ $update->id }})"
                                                type="button"
                                            >Read more</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Update Modal (global, outside loop) -->
                    <div class="mt-2">
                        {{-- Pagination links with unique page parameter for each project --}}
                        {{ $updates->appends(request()->except('updates_page_' . $projectId))->links() }}
                    </div>
                </div>
            @endif
            </div>
        @endforeach
    <!-- Modal rendered once, outside the loop -->
    <div 
        x-show="open" 
        style="display: none;" 
        class="fixed inset-0 z-50 flex items-center justify-center"
    >
        <!-- Modal background -->
        <div 
            class="absolute inset-0 bg-black opacity-50 transition-opacity" 
            @click="close"
        ></div>
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-lg max-w-lg w-full p-6 z-10">
            <button @click="close" class="absolute top-2 right-2 text-gray-400 hover:text-gray-700">&times;</button>
            <template x-if="loading">
                <div class="text-center py-8">Loading...</div>
            </template>
            <template x-if="!loading && update">
                <div>
                    <div class="mb-2 text-xs text-gray-500" x-text="update.sent_on"></div>
                    <div class="font-bold mb-2">Project Update</div>
                    <div class="prose mb-2" x-html="update.comment"></div>
                </div>
            </template>
        </div>
    </div>
    </div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
function updateModal() {
    return {
        open: false,
        loading: false,
        update: null,
        showUpdate(id) {
            this.open = true;
            this.loading = true;
            fetch(`/updates/${id}`)
                .then(r => r.json())
                .then(data => {
                    this.update = data;
                    this.loading = false;
                });
        },
        close() {
            this.open = false;
            this.update = null;
        }
    }
}
</script>
@endpush

@endsection
