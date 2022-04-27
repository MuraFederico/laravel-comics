@extends('templates/main')

@section('title', 'Comics')

@section('content')
<section id="main-content">
    <div class="container container-main-content">

        <div class="current-series">
            <h1>CURRENT SERIES</h1>
        </div>

        <div class="container-cards">
            @foreach ($comics as $comic)
                <div class="card">
                    <div class="img-container">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <h3>{{$comic['title']}}</h3>
                </div>
            @endforeach
        </div>

        <button class="btn-expand">LOAD MORE</button>
    </div>
</section>
@endsection
