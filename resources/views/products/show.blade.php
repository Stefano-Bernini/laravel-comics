@extends('layouts.app')

@section('content')
    <div class="blue_bar"></div>
    <div class="container">
        <div class="row my-4">
            <div class="col-1 empty_for_spacing"></div>
            <div class="col-10">
                <div class="row">
                    <div class="content_detail col-8">
                        <img class="cover_position border border-white" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h4 class="text-uppercase"><strong>{{ $comic['title'] }}</strong></h4>
                            <div class="green_banner d-flex align-items-center">
                                <div class="col-8 d-flex justify-content-between py-2">
                                    <span class="ps-3"><strong>U.S. Price: </strong><strong class="color_white">{{ $comic['price'] }}</strong></span>
                                    <span class="pe-3"><strong>AVAILABLE</strong></span>
                                </div>
                                <div class="col-4 d-flex justify-content-center py-2">
                                    <span>Check Availability &#9662;</span>
                                </div>
                            </div>
                            <p class="pt-3"><strong>Descrizione:  </strong>{{ $comic['description'] }}</p>
                    </div>
                    <div class="col-4">
                        <h6 class="text-secondary d-flex justify-content-end"><strong>ADVERTISMENT</strong></h6>
                        <img class="w-100" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Immagine Pubblicità">
                    </div>
                </div>
            </div>
            <div class="col-1 empty_for_spacing"></div>
        </div>
    </div>
    <div class="bg_light_grey_top">
        <div class="container">
            <div class="row">
                <div class="col-1 empty_for_spacing"></div>
                <div class="col-5 talent">
                    <h4 class="pt-4 pb-2">Talent</h4>
                    <hr>
                    <div class="illustrators d-flex">
                        <div class="col-4">
                            <p>Art by: </p>
                        </div>
                        <div class="col-8">
                            @foreach ($comic['artists'] as $artist)
                                <a href="#">{{ $artist }}</a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="writers d-flex">
                        <div class="col-4">
                            <p>Writen by: </p>
                        </div>
                        <div class="col-8">
                            @foreach ($comic['writers'] as $writer)
                                <a href="#">{{ $writer }}</a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-5 specs mx-5">
                    <h4 class="pt-4 pb-2">Specs</h4>
                    <hr>
                    <div class="series d-flex">
                        <div class="col-4">
                            <p>Series: </p>
                        </div>
                        <div class="col-8">
                            <a class="text-uppercase" href="#">{{ $comic['series'] }}</a>
                        </div>
                    </div>
                    <hr>
                    <div class="us_price d-flex">
                        <div class="col-4">
                            <p class="blue_text">U.S. Price: </p>
                        </div>
                        <div class="col-8">
                            <p class="black_text">{{ $comic['price'] }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="on_sale_date d-flex">
                        <div class="col-4">
                            <p class="blue_text">On Sale Date: </p>
                        </div>
                        <div class="col-8">
                            <p class="black_text">{{ $comic['sale_date'] }}</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-1 empty_for_spacing"></div>
            </div>
        </div>
    </div>
    <div class="bg_light_grey_bottom border_light_grey">
        <div class="container">
            <div class="row">
                <div class="col-3 border_left border_right">
                    <h5 class="text-uppercase">digital comics</h5>
                </div>
                <div class="col-3 border_right">
                    <h5 class="text-uppercase">shop dc</h5>
                </div>
                <div class="col-3 border_right">
                    <h5 class="text-uppercase">comic shop locator</h5>
                </div>
                <div class="col-3 border_right">
                    <h5 class="text-uppercase">subscriptions</h5>
                </div>
            </div>
        </div>
    </div>
@endsection