<x-guest-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Usuario: {{ $user->name }}

                    <img src="{{ $user->profile_picture_url }}" alt="" width="300" height="300" title="{{ $user->profile_picture }}">
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
