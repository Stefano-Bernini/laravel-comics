<header>
    <div class="top_header bg_light_blue">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <ul class="list-unstyled list-group list-group-horizontal">
                        <li class="me-5"><a href="/" class="text-uppercase text-white text-decoration-none">dc power&#8480;visa&#174;</a></li>
                        <li><a href="/" class="text-uppercase text-white text-decoration-none"> additional dc sites</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header">
        <div class="container">
            <div class="row">
                <div class="col-2 my-4">
                    <div class="img_logo">
                        <a href="{{ url('/')}}">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <ul class="list-unstyled d-flex justify-content-center text-uppercase">
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">characters</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">comics</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">movie</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">tv</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">games</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">collectebles</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">videos</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">fans</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">news</a></li>
                        <li><a href="{{ route('homepage') }}" class="list-group-item mx-3 fw-bolder">shop</a></li>
                        <li>
                            <input class="search_style" type="search" placeholder="Search">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron"></div>
</header>