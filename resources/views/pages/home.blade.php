@extends('main')
@section('content')
<div class="container">
        <div class="row my-5">
            <div class="col my-5">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fg2.dcdn.lt%2Fimages%2Fpix%2Fasociatyvi-nuotrauka-78029675.jpg&f=1&nofb=1"
                    alt="XD" width="900" height="400">
            </div>
            <div class="col mt-5">
                <div class="col mt-5 my-5">
                    <h1>Informacija apie projektą</h1>
                    <p>Projekto aprašymas</p>
                    <button type="button" class="btn btn-primary">Visi renginiai</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="alert alert-dark py-5 text-center text-white" style="background-color: rgb(74, 75, 80);" role="alert">
            Visi renginiai ir registracija į juos vienoje vietoje
        </div>
    </div>
    
<div class="container">

        <div class="row my-5">
        @foreach($events as $event)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/event/{{$event->id}}">{{$event->title}}</a></h5>
                        <p class="card-text">{{$event->description}}</p>
                        <img class="card-img-top" src="{{ url('storage/'.$event->img) }}" alt="Photo">
                        <p>Data: {{$event->Data}}</p>
                    </div>
                    <div class="card-header">
                        <a href="#" class="btn btn-primary">Platesnė informacija ir registracija</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   
@endsection