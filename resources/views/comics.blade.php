@extends('layout.app')

@section('content')
<div class="bg-dark">
    <div class="container position-relative">
        <span class="label ">CURRENT SERIES</span>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-4  current_series_box">
            @foreach ($db_comics as $db_comic)
            <div class="col">
                <div class="card comic_card">
                    <img class="card-img-top card_top" src="{{$db_comic['thumb']}}" alt="">
                    <div class="card-body bg-dark text-light border-dark card_text">
                        {{$db_comic['title']}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    @endsection