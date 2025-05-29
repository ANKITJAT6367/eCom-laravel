@extends('master')
@section('content')
    <div id="demo" class="carousel slide mt-2 me-5 ms-5 mb-2" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                    <a href="details/{{ $item['id'] }}">
                        <img src="{{ $item['gallery'] }}" alt="Los Angeles" class="d-block"
                            style="height: 500px;width: 100%">
                        <div class="carousel-caption">
                            <h3 style="color: rgb(255, 0, 0)">{{ $item['name'] }}</h3>
                            <p style="color: springgreen">{{ $item['description'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <div class="tranding-blog mt-5">
        <h1>Tranding Peoducts</h1>
        <div class="">
            @foreach ($products as $item)
                <div class="tranding-item">
                    <a href="details/{{ $item['id'] }}">
                        <img class="tranding-img" src="{{ $item['gallery'] }}">
                        <div class="">
                            <h3 style="color: rgb(255, 0, 0)">{{ $item['name'] }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
