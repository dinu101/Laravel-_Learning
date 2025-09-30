<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('dashboard') }}
        </h2>
    </x-slot> 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   {{--  --}}
                   @if (session('status'))
    <div class="max-w-xl mx-auto my-6 px-6 py-4 bg-gradient-to-r from-green-200 via-green-100 to-green-50 border-l-4 border-green-500 text-green-900 rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 12l2 2l4 -4m5 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                </svg>
                <span class="font-semibold text-md">{{ session('status') }}</span>
            </div>
            <button onclick="this.parentElement.parentElement.remove()"
                    class="text-green-700 hover:text-green-900 transition">
                &times;
            </button>
        </div>
    </div>
@endif
                   {{--  --}}
                   <div class="overflow-x-auto p-6">
    <table class="min-w-full divide-y divide-gray-200 bg-white rounded-lg shadow-md">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Title</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Body</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($posts as $post)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $post->user->name ?? 'Unknown' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $post->title }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ Str::limit($post->body, 100) }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800 space-x-2">

                        <a href="{{ route('post.edit',$post->id) }}"
                           class="inline-block px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                            Edit
                        </a>
                        {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block"> --}}
                        <form action="{{route('post.destroy', $post->id)}}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition"
                                onclick="return confirm('Are you sure you want to delete this post?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

                   {{--  --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
