@extends("main")
@section("content")
<div class="card bg-light bg-dark border-bottom-0" style="border-radius: 0">
    <div class="card-body text-center p-4 p-lg-5 pt-3 pt-lg-8">
        <div class="bg-dark bg-secondary text-white mb-4 mt-4"><i class="fas fa-caret-down text-success"></i>
            <div>
                <h2 class="fs-4 fw-bold">{{$event->title}}</h2>
                <p class="mb-8">{{$event->description}}</p>
                <p>Data: {{$event->Data}}</p>
                <a href="#" class="btn btn-primary my-2 mx-4 border-0">Registruotis</a>
                <a href="/event/edit/{{$event->id}}" class="btn btn-warning my-2 border-0">Redaguoti</a>
                <a href="/event/{{ $event->id }}/delete/ask" class="btn btn-danger my-2 mx-4 border-0">Ištrinti</a>
            </div>
            <!-- <div class="justify-content-center mt-5">
                <div class="sol-sm-4">
                    <img class="border border-3" src="{{ url('storage/'.$event->img) }}" alt="Photo" style="max-width: 600px;">
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection
