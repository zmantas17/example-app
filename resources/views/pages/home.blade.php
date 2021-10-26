@extends('main')
@section('content')
<div class="container">
        <div class="row">
            <div class="col my-5">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fg2.dcdn.lt%2Fimages%2Fpix%2Fasociatyvi-nuotrauka-78029675.jpg&f=1&nofb=1"
                    alt="XD" width="900" height="400">
            </div>
            <div class="col mt-5">
                <div class="col mt-5">
                    <h1>Informacija apie projektą</h1>
                    <p>Projekto aprašymas</p>
                    <button type="button" class="btn btn-primary border-0">Visi renginiai</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="alert alert-dark py-5 text-center text-white" style="background-color: rgb(74, 75, 80);" role="alert">
            Visi renginiai ir registracija į juos vienoje vietoje
        </div>
    </div>
    
<div class="container mb-5">

        <div class="row mb-5">
        @foreach($events as $event)
            <div class="col-sm-4 mb-5">
                <div class="card bg-dark border border-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-text">{{$event->description}}</p>
                        <img class="card-img-top" src="{{ url('storage/'.$event->img) }}" alt="Photo">
                        <div class="text-center mt-4">
                            <p>Data: {{$event->Data}}</p>
                        </div>
                    </div>
                    <div class="card-header">
                        <div class="text-center">
                            <a href="/event/{{$event->id}}" class="btn btn-primary mb-3 border border-warning border-2 border-0">Platesnė informacija ir registracija</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   
@endsection