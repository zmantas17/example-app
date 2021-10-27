<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <h4>Jūsų užregistruoti renginiai</h4>
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Pavadinimas
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aprašymas
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Data
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($events as $event)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a class="text-indigo-600 hover:text-indigo-900" href="/event/{{ $event->id }}">{{ $event->title }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $event->description }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $event->data }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/event/{{ $event->id }}" class="text-indigo-600 hover:text-indigo-900">Atidaryti</a>
                            <a href="/event/{{ $event->id }}/unregister" class="text-indigo-600 hover:text-indigo-900">Atsiregistruoti</a>
                        </td>
                    </tr>
                    @endforeach

                    <!-- More people... -->
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
