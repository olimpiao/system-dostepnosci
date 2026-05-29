@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h1 class="text-3xl font-bold">
        Lista zgłoszeń
    </h1>

    <a href="{{ route('reports.create') }}"
        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">

        Dodaj zgłoszenie

    </a>

</div>

@if($reports->count())

<div class="overflow-x-auto bg-white rounded shadow">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>

                <th class="text-left p-4">
                    Tytuł
                </th>

                <th class="text-left p-4">
                    Kategoria
                </th>

                <th class="text-left p-4">
                    Status
                </th>

                <th class="text-left p-4">
                    Zgłaszający
                </th>

                <th class="text-left p-4">
                    Akcje
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($reports as $report)

            <tr class="border-t">

                <td class="p-4">

                    <div class="font-semibold">
                        {{ $report->title }}
                    </div>

                    <div class="text-sm text-gray-500 mt-1">
                        {{ $report->description }}
                    </div>

                </td>

                <td class="p-4">

                    {{ $report->category->name }}

                </td>

                <td class="p-4">

                    @if($report->status == 'Nowe')

                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                        {{ $report->status }}
                    </span>

                    @elseif($report->status == 'W trakcie')

                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                        {{ $report->status }}
                    </span>

                    @else

                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                        {{ $report->status }}
                    </span>

                    @endif

                </td>

                <td class="p-4 text-gray-600">

                    {{ $report->reporter_name }}

                </td>

                <td class="p-4">

                    <div class="flex gap-2">

                        <a href="{{ route('reports.edit', $report) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">

                            Edytuj

                        </a>

                        <form action="{{ route('reports.destroy', $report) }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">

                                Usuń

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@else

<div class="bg-gray-100 p-6 rounded">

    Brak zgłoszeń.

</div>

@endif

@endsection