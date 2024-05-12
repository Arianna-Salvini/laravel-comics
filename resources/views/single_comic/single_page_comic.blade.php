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
    </div>
    <div class="specific_details bg-light">
        <div class="container d-flex justify-content-between">
            <div class="talent ps-5 flex-grow-1 specific_details_box left">
                <div class="border-bottom">
                    <h5 class="text-uppercase comic_primary_dark p-3">talent</h5>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 pe-5">Art by:</div>
                    <a href="#"
                        class="comic_primary_light p-3 flex-grow-1 text-decoration-none">{{ $comic['artists'] }}</a>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3  ">Written by:</div>
                    <a href="#"
                        class="comic_primary_light p-3 flex-grow-1 text-decoration-none">{{ $comic['writers'] }}</a>
                </div>
            </div>
            <div class="specs px-5 flex-grow-1 specific_details_box right">
                <div class="border-bottom">
                    <h5 class="text-uppercase comic_primary_dark p-3">specs</h5>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 ">Series:</div>
                    <div class="comic_primary_light p-3 flex-grow-1">{{ $comic['series'] }}</div>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 ">U.S. Price:</div>
                    <div class="comic_primary_light p-3 flex-grow-1">{{ $comic['price'] }}</div>

                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 ">On Sale Date:</div>
                    <div class="comic_primary_light p-3 flex-grow-1">{{ $comic['sale_date'] }}</div>
                </div>
            </div>
        </div>
        <div class="call_foraction_banner ">
            <div class="call_foraction container mt-3 d-flex align-items-center justify-content-around">
                <a href="#" alt="digital logo" class=" d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="Dc comic digital link">
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
        </div>s
    @endsection
