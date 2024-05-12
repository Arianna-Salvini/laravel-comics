@extends('layout.app')

@section('content')
    <div class="container">
        <div class="comic_img mx-5">
            <img src="{{ $comic['thumb'] }}" alt="Image of {{ $comic['title'] }}" class="shadow-lg">
            <div class="label_comic type">COMIC BOOK</div>
            <div class="label_comic view">VIEW GALLLERY</div>
        </div>
        <div class="d-flex">
            <div class="comic_details p-5">
                <h2 class="text-uppercase comic_primary_dark">{{ $comic['title'] }}</h2>
                <div class="shop_box d-flex justify-content-between align-items-center my-4 ">
                    <div class="price d-flex justify-content-between">
                        <div>
                            U.S Price:
                            <strong>{{ $comic['price'] }}</strong>
                        </div>
                        <div class="fw-lighter text-uppercase">
                            Avalable
                        </div>
                    </div>
                    <div class="availability d-flex justify-content-between align-items-center p-2">
                        <div class="pe-2">Check Availability </div>
                        <i class="fa-solid fa-caret-down border-dark-left"></i>
                    </div>
                </div>
                <p class="comic_color_light">{{ $comic['description'] }}</p>
            </div>
            <div class="advertisment p-5">
                <h4 class="text-end">ADVERTISMENT</h4>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
        <div class="div">

        </div>
    </div>
@endsection
