@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Edytuj zgłoszenie
</h1>

<form action="{{ route('reports.update', $report) }}"
      method="POST"
      class="space-y-4">

    @csrf

    @method('PUT')

    <div>

        <label class="block mb-2 font-semibold">
            Tytuł
        </label>

        <input type="text"
               name="title"
               value="{{ $report->title }}"
               class="w-full border rounded px-3 py-2">

    </div>

    <div>

        <label class="block mb-2 font-semibold">
            Imię i nazwisko
        </label>

        <input type="text"
               name="reporter_name"
               value="{{ $report->reporter_name }}"
               class="w-full border rounded px-3 py-2">

    </div>

    <div>

        <label class="block mb-2 font-semibold">
            Jednostka
        </label>

        <input type="text"
               name="organization"
               value="{{ $report->organization }}"
               class="w-full border rounded px-3 py-2">

    </div>

    <div>

        <label class="block mb-2 font-semibold">
            Kategoria WCAG
        </label>

        <select name="category_id"
                class="w-full border rounded px-3 py-2">

            @foreach($categories as $category)

                <option value="{{ $category->id }}"
                    {{ $report->category_id == $category->id ? 'selected' : '' }}>

                    {{ $category->name }}

                </option>

            @endforeach

        </select>

    </div>

    <div>

        <label class="block mb-2 font-semibold">
            Status
        </label>

        <select name="status"
                class="w-full border rounded px-3 py-2">

            <option value="Nowe"
                {{ $report->status == 'Nowe' ? 'selected' : '' }}>

                Nowe

            </option>

            <option value="W trakcie"
                {{ $report->status == 'W trakcie' ? 'selected' : '' }}>

                W trakcie

            </option>

            <option value="Rozwiązane"
                {{ $report->status == 'Rozwiązane' ? 'selected' : '' }}>

                Rozwiązane

            </option>

        </select>

    </div>

    <div>

        <label class="block mb-2 font-semibold">
            Opis problemu
        </label>

        <textarea name="description"
                  rows="5"
                  class="w-full border rounded px-3 py-2">{{ $report->description }}</textarea>

    </div>

    <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">

        Zapisz zmiany

    </button>

</form>

@endsection