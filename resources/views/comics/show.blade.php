@extends('layouts.app')
@section('content')
    <section id="comic-main-top">
        <div class="background" style="background-image: url('{{asset('img/'.$comic->poster)}}')">   
            <div class="tight-container container">
                <div class="cover" style="background-image: url('{{asset('img/'.$comic->cover)}}')">
    
                </div>
            </div>
        </div>
    </section>

    <section id="comic-main-center">
        <div class="tight-container container">
            <h1 class="title">{{$comic->title}}</h1>
            <div class="green-banner">
                <div class="available">
                    <div>U.S. price $ {{$comic->price}}</div>
                    <div>{{$comic->available?'available':'not available'}}</div>
                </div>
                <div class="check">check availability <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
            </div>
            <p class="description">{{$comic->description}}</p>
        </div>
    </section>

    <section id="comic-main-bottom">
        <div class="tight-container container">
            <div class="col-50">
                <div class="row">
                    <h2>Talent</h2>
                </div>
                <div class="row">
                    <p class="col-50">art-by:</p>
                    <p class="col-50">{{$comic->artist}}</p>
                </div>
                 <div class="row">
                    <p class="col-50">written-by:</p>
                    <p class="col-50">{{$comic->author}}</p>
                </div>
            </div>
            
            <div class="col-50">
                <div class="row">
                    <h2>Specs</h2>
                </div>
                 <div class="row">
                    <p class="col-50">series:</p>
                    <p class="col-50">{{$comic->title}}</p>
                </div>
                 <div class="row">
                    <p class="col-50">US-price:</p>
                    <p class="col-50">{{$comic->price}}</p>
                </div>
                 <div class="row">
                    <p class="col-50">on sale:</p>
                    <p class="col-50">{{$comic->created_at}}</p>
                </div>
                 <div class="row">
                    <p class="col-50">volume:</p>
                    <p class="col-50">{{$comic->volume}}</p>
                </div>
                 <div class="row">
                    <p class="col-50">trim size:</p>
                    <p class="col-50">A5</p>
                </div>
                 <div class="row">
                    <p class="col-50">page count:</p>
                    <p class="col-50">{{$comic->pages}}</p>
                </div>
                 <div class="row">
                    <p class="col-50">available:</p>
                    <p class="col-50">{{$comic->available?'Yes':'No'}}</p>
                </div>
            </div>
        </div>
        
    </section>
@endsection