@extends('layouts.app')

@section('content')

<h1 class="mb-4">Dodaj zgłoszenie</h1>

<form action="{{ route('reports.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label class="form-label">Tytuł</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Imię i nazwisko</label>
        <input type="text" name="reporter_name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Jednostka</label>
        <input type="text" name="organization" class="form-control">
    </div>

    <div class="mb-4">

        <label class="block mb-2 font-semibold">
            Kategoria WCAG
        </label>

        <select name="category_id"
            class="w-full border rounded px-3 py-2">

            @foreach($categories as $category)

            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>

            @endforeach

        </select>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Status
            </label>

            <select name="status"
                class="w-full border rounded px-3 py-2">

                <option value="Nowe">
                    Nowe
                </option>

                <option value="W trakcie">
                    W trakcie
                </option>

                <option value="Rozwiązane">
                    Rozwiązane
                </option>

            </select>

        </div>

    </div>

    <div class="mb-3">
        <label class="form-label">Opis problemu</label>
        <textarea name="description" class="form-control" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Zapisz zgłoszenie
    </button>

</form>

@endsection