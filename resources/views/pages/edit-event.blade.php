@extends('main')
@section('content')
    <div class="container">
        <form action="/event/edit/{{ $event->id }}" method="POST" class="mt-5">
            @csrf
            {{ method_field("PATCH") }}
            @include("_partials/errors")
            <h3 class="text-center">Uzpildykite forma!</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$event->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{$event->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Pasirinkite data</label>
                <input type="date" class="form-control" name="Data" id="date" value="{{$event->Data->format('Y-m-d')}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection