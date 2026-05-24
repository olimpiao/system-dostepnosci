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

    <div class="mb-3">
        <label class="form-label">Opis problemu</label>
        <textarea name="description" class="form-control" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Zapisz zgłoszenie
    </button>

</form>

@endsection