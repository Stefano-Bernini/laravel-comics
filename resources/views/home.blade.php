@extends('layouts.app')

@section('content')
    <div class="background_black">
        <div class="container">
            <div class="row">
                @foreach($comics as $id => $comic)
                    <div class="col-12 col-md-6 col-lg-2 mt-5">
                        <a href="{{ route('products.show', $id) }}">
                            <div class="card border-1 my-1">
                                <img class="img-fluid card-img-top h_img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"> 
                            </div>
                        </a>
                        <a class="text_dec_none" href="#">
                            <span>{{ $comic['series'] }}</span>
                        </a>
                    </div> 
                @endforeach
            </div>
            <div class="d-flex justify-content-center py-4">
                <button class="btn btn-primary text-uppercase py-2 px-5 rounded-0 fw-bolder">load more</button>
            </div>
        </div>
    </div>
    <div class="bg_light_blue">
        <div class="container">
            <div class="row">
                <div class="col-12 px-2 py-1 d-flex justify-content-center align-items-center text-white">
                    <img class="height" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <span class="ms-2">DIGITAL COMICS</span>

                    <img class="height ms-5" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <span class="ms-2">DC MERCHANDISE</span>

                    <img class="height ms-5" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <span class="ms-2">SUBSCRIPTION</span>

                    <img class="height ms-5" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span class="ms-2">COMIC SHOP LOCATOR</span>

                    <img class="height ms-5" src="{{ Vite::asset('resources/img/buy-dc-power-visa.png') }}" alt="">
                    <span class="ms-2">DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
@endsection