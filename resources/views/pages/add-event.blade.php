@extends('main')
@section('content')
    <div class="container text-white">
        <form action="storeEvent" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @include("_partials/errors")
            <h3 class="text-center">Užpildykite formą!</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Pavadinimas</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Aprašymas</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Pasirinkite data</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
            <div class="mb-3">
                <label class="form-label">Pasirinkite nuotrauka</label>
                <input type="file" class="form-control" name="img">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary border-0">Pateikti</button>
            </div>
        </form>
    </div>

@endsection