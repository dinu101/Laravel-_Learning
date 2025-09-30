<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot> 
<hr>
<br>
<br>
<br>
    {{--  --}}
    <form method="POST"  class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow-md">
    @csrf

    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
    </div>

    <div class="mb-4">
        <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
        <textarea name="body" id="body" rows="4" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
    </div>

    <div class="flex justify-end">
        <button type="submit"
            class="inline-flex items-center px-6 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition" value="Post">
            Submit
        </button>
    </div>
</form>

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
</x-app-layout>
