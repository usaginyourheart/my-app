<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Diary') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-bold mb-2"> {{ __('Conflict') }} </h3>
                    <!-- Conflict (Table) -->
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-xl font-bold mb-4">{{ __('Conflict summary') }}</h3>
                        <div class="flex justify-center">
                            <table class="table table-auto">
                                <thead>
                                    <tr>
                                        <th class="border-2 border-slate-400 dark:border-slate-600 px-6 py-3">ID</th>
                                        <th class="border-2 border-slate-400 dark:border-slate-600 px-6 py-3">Date</th>
                                        <th class="border-2 border-slate-400 dark:border-slate-600 px-6 py-3">Content
                                        </th>
                                        <th class="border-2 border-slate-400 dark:border-slate-600 px-6 py-3">Emotion
                                        </th>
                                        <th class="border-2 border-slate-400 dark:border-slate-600 px-6 py-3">Intensity
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conflictDiaries as $conflictDiary)
                                        <tr class="text-center">
                                            <td class="border-2 border-slate-400 dark:border-slate-600 px-6 py-4">
                                                {{ $conflictDiary->id }}</td>
                                            <td class="border-2 border-slate-400 dark:border-slate-600 px-6 py-4">
                                                {{ $conflictDiary->created_at }}</td>
                                            <td class="border-2 border-slate-400 dark:border-slate-600 px-6 py-4">
                                                {{ $conflictDiary->content }}</td>
                                            <td class="border-2 border-slate-400 dark:border-slate-600 px-6 py-4">
                                                {{ $conflictDiary->name }}</td>
                                            <td class="border-2 border-slate-400 dark:border-slate-600 px-6 py-4">
                                                {{ $conflictDiary->intensity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
