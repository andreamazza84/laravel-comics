@extends('layouts.app')
@section('content')

<section id="main-top">
    <div class="container">
        <h1 class="tag">comics & graphic novels</h1>
        <nav>
            <ul class="menu-release">
                <li><a class="active" href="#">this week</a></li>
                <li><a href="#">last week</a></li>
                <li><a href="#">next week</a></li>
                <li><a href="#">upcoming</a></li>
                <li><a href="#">see all</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        @foreach($comics as $comic) <!-- comics -->
        <div class="card">
            <a class="cover" href="{{ route('comics.show', $comic->id) }}"><img src="{{'img/'.$comic->cover }}" alt="cover"></a>
            <a href="{{ route('comics.show', $comic->id) }}" class="title">{{ $comic->title }}</a>
            <div class="available">{{ $comic->available?'available now':'not available' }}</div>
            <div class="tag">comic book</div>
        </div>
        @endforeach
    </div>
</section>
<section id="main-center">
    <div class="container">
        @foreach($mustreads as $mustread) <!-- mustreads -->
        @if ($loop->first)
            <div class="card">
            <h1 class="tag">must reads</h1>
            <a class="cover" href="#"><img src="{{ 'img/'.$mustread->cover }}" alt="cover"></a>
            <div class="advertise">{{ $mustread->jingle }}</div>
            <a href="#" class="title">{{ $mustread->title }}</a>
            <div class="description">{{ $mustread->description }}</div>
        </div>
        @else
        <div class="card">
            <a class="cover" href="#"><img src="{{ 'img/'.$mustread->cover }}" alt="cover"></a>
            <div class="advertise">{{ $mustread->jingle }}</div>
            <a href="#" class="title">{{ $mustread->title }}</a>
            <div class="description">{{ $mustread->description }}</div>
        </div>
        @endif
        @endforeach
    </div>
</section>
<section id="main-bottom">
    <div class="container">
        <h1 class="tag">current series</h1>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb5_BMvRas_5d82c7892f7e63.62526030.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb5_catwoman_5b1ec42eec63e2.07910716.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb5_FarSector_5dcb5fc5009773.36625144.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb6_DCConnect_5ef2a2f4f34d10.17317418.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb7_AmericanVampire1976_5fc5637bb970f3.51703648.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb7_BMBW_5fc5658b1171c4.10950786.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb7_BMCW_5fc56629b44c39.86920586.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb7_BMWKHQ_5fc5675de13b69.95483216.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb8_DCLoveBattlefield_60305d0e0a6d74.37220374.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>
        <div class="card">
            <a href="#" class="cover">
                <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
            </a>
            <a href="#" class="title">amercan vampire 1976</a>
        </div>

    </div>
</section>

@endsection