@extends('main')
@section('content')
    <div class="container text-white">
        <form action="storeCategory" method="POST" class="mt-5">
            @csrf
            @include("_partials/errors")
            <h3 class="text-center">Suraskite kategorija!</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Pavadinimas</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            
        </form>
    </div>

@endsection