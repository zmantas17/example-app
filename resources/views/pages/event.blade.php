@extends("main")
@section("content")
            <div class="card bg-light border-8 h-100 bg-dark mt-1">
                <div class="card-body text-center p-4 p-lg-5 pt-3 pt-lg-8">
                    <div class="bg-dark bg-secondary text-white rounded-3 mb-4 mt-4"><i class="fas fa-caret-down text-warning"></i><div>
                    <h2 class="fs-4 fw-bold">{{$event->title}}</h2>
                    <p class="mb-8">{{$event->description}}</p>
                    <p>Data: {{$event->Data}}</p>
                    <a href="#" class="btn btn-primary my-2 mx-4">Registruotis</a>
                    <a href="/event/edit/{{$event->id}}" class="btn btn-warning my-2">Redaguoti</a>
                    <a href="/event/{{ $event->id }}/delete/ask" class="btn btn-danger my-2 mx-4">Istrinti</a>
                </div>
            </div>
@endsection