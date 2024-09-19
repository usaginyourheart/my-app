<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col justify-center p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-center text-xl">Hello, {{ Auth::user()->name }}!</div>
                    <div class="mt-3 mb-3">
                        @if(Auth::user()->profile_photo)
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo" class="w-20 h-20 object-cover rounded-full">
                            </div>
                        @else
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('No profile photo uploaded.') }}</p>
                        @endif
                    </div>
                    <div class="text-center text-lg">Have a great day!</div>
                    <div class="text-center mt-2">You're logged in!</div>
                    {{-- {{ __("You're logged in!") }} --}}
                    <p class="mt-2 text-center text-gray-600 dark:text-gray-500">
                        {{ Auth::user()->bio->bio ?? 'No bio available' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
