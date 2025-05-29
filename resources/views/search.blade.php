@extends('master')
@section('content')
    <div class="col-sm-4">
        <a href="">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="tranding-blog mt-5">
            <h2><b>Result for Peoducts</b></h2>
            <div class="">
                @foreach ($products as $item)
                    <div class="searched-item">
                        <a href="details/{{ $item['id'] }}">
                            <img class="tranding-img" src="{{ $item['gallery'] }}">
                            <div class="">
                                <h2>{{ $item['name'] }}</h2>
                                <h5>{{ $item['description'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
