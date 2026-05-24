@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">
        Lista zgłoszeń
    </h1>

    <a href="{{ route('reports.create') }}"
        class="bg-blue-600 text-white px-4 py-2 rounded">
        Dodaj zgłoszenie
    </a>
</div>

@if($reports->count())

<div class="space-y-4">

    @foreach($reports as $report)

    <div class="border rounded p-4 shadow">

        <h2 class="text-xl font-semibold">
            {{ $report->title }}
        </h2>

        <p class="text-gray-600 mt-2">
            {{ $report->description }}
        </p>

        <div class="mt-3 text-sm text-gray-500">
            Status: {{ $report->status }}
        </div>

    </div>

    @endforeach

</div>

@else

<div class="bg-gray-100 p-6 rounded">
    Brak zgłoszeń.
</div>

@endif

@endsection