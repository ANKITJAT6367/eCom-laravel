@extends('master')
@section('content')
    {{-- <div class="col-sm-4">
        <a href="">Add to Cart List</a>
    </div> --}}
    <div class="col-sm-10">
        <div class="tranding-blog mt-2">
            <h2><b>Cart List</b></h2>
            <div class="">
                @foreach ($products as $item)
                    <div class="row searched-item card-list-devider">
                        <div class="col-sm-3">
                            <a href="details/{{ $item->id }}">
                                <img class="tranding-img" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="">
                                <h2>{{ $item->name }}</h2>
                                <h5>{{ $item->description }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
