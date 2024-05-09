@extends('layout.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <div class="comic_details p-5">
                <h2 class="text-uppercase">{{ $comic['title'] }}</h2>
                <div class="shop_box bg-success d-flex justify-content-between align-items-center px-4">
                    <div class="price">
                        U.S Price:
                        <strong>{{ $comic['price'] }}</strong>
                    </div>
                    <div class="availability d-flex justify-content-between align-items-center py-2">
                        <div class="px-2">Check Availability </div>
                        <i class="fa-solid fa-caret-down border-dark-left"></i>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="advertisment p-5">
                <h4 class="text-end">ADVERTISMENT</h4>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
