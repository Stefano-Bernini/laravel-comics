<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>

    <body>
        @include('partials.header')
        <main>
            <div class="background_black">
                <div class="container">
                    <div class="row">
                        @foreach($comics as $comic)
                            <div class="col-12 col-md-6 col-lg-2 mt-5">
                                <div class="card border-1 my-1">
                                    <img class="img-fluid card-img-top h_img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                </div>
                                <span>{{ $comic['title'] }}</span>
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
        </main>
        <footer></footer>
    </body>
</html>