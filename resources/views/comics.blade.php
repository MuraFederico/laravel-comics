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
<section id="main-nav">
    <nav class="nav-main">
        <div class="container">
            <ul>
                <li>
                    <a href="">
                        <div class="container-img">
                            <img src="images/buy-comics-digital-comics.png" alt="DIGITAL COMICS">
                        </div>

                        DIGITAL COMICS
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="container-img">
                            <img src="images/buy-comics-merchandise.png" alt="DC MERCHANDISE">
                        </div>

                        DC MERCHANDISE
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="container-img">
                            <img src="images/buy-comics-subscriptions.png" alt="SUBSCRIPTION">
                        </div>

                        SUBSCRIPTION
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="container-img">
                            <img src="images/buy-comics-shop-locator.png" alt="COMIC SHOP LOCATOR">
                        </div>

                        COMIC SHOP LOCATOR
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="container-img">
                            <img src="images/buy-dc-power-visa.svg" alt="DC POWER VISA">
                        </div>

                        DC POWER VISA
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</section>
@endsection
