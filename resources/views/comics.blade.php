@extends('layout.app')

@section('content')
    <div class="bg-dark">
        <div class="container position-relative">
            <span class="label ">CURRENT SERIES</span>
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-4  current_series_box">
                @foreach ($db_comics as $index => $db_comic)
                    <div class="col">
                        <a href="{{ route('single_page_comic', ['id' => $index]) }}">
                            <div class="card comic_card">
                                <img class="card-img-top card_top" src="{{ $db_comic['thumb'] }}" alt="">
                                <div class="card-body bg-dark text-light border-dark card_text">
                                    {{ $db_comic['title'] }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary px-5 rounded-0">LOAD
                    MORE</button>
            </div>
        </div>
        <div class="call_foraction_banner ">
            <div class="call_foraction container mt-3 d-flex align-items-center justify-content-around">
                <a href="#" alt="digital logo" class=" d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Dc comic digital link">
                    <span class="text-light ps-3">
                        DIGITAL COMICS
                    </span>
                </a>
                <a href="#" alt="digital logo" class=" d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Dc comic digital link">
                    <span class="text-light ps-3">
                        DC MERCHANDISE
                    </span>
                </a>
                <a href="#" alt="digital logo" class=" d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Dc comic digital link">
                    <span class="text-light ps-3">
                        SUBSCRIPTION
                    </span>
                </a>
                <a href="#" alt="digital logo" class=" d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Dc comic digital link">
                    <span class="text-light ps-3">
                        COMICS SHOP LOCATOR
                    </span>
                </a>
                <a href="#" alt="digital logo" class=" d-flex align-items-center">
                    <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                        viewBox="0 0 79.5 50.9" xml:space="preserve">
                        <style>
                            .st0 {
                                fill: none;
                                stroke: #fff;
                                stroke-width: 1.7732;
                                stroke-miterlimit: 10;
                                height: 50%;
                            }
                        </style>
                        <path class="st0"
                            d="M73.9 49.6H5.3c-2.1 0-3.8-1.7-3.8-3.8V5.4c0-2.1 1.7-3.8 3.8-3.8h68.6c2.1 0 3.8 1.7 3.8 3.8v40.3c0 2.1-1.7 3.9-3.8 3.9zM1.5 15.4h76.2" />
                        <path fill="#fff" stroke="#fff" stroke-width=".998" stroke-linecap="round"
                            stroke-linejoin="round" stroke-miterlimit="10"
                            d="M50.1 22.1l-9.7 1.4 5.1-16.4L29 30.2l9.3-1.3L34.4 44z" />
                    </svg>
                    <span class="text-light ps-3">
                        DC POWER VISA
                    </span>
                </a>
            </div>
        </div>
    @endsection
