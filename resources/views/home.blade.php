@extends('layout.main')

@section('content')
    <div class="container d-flex ">
        @foreach ($products as $product)
            <div class="product">
                <img class="foto1" src="{{ asset('img/' . $product['frontImage']) }}" alt="">
                <img src="{{ asset('img/' . $product['backImage']) }}" alt="1b">
                <p>{{ $product['brand'] }}</p>
                <h3>{{ $product['name'] }}</h3>
                <span class="prezzo">{{ $product['price'] }} &euro;</span>
                <div class="badges">
                    <span class="cuore d-flex ">&hearts;</span>
                    @foreach ($product['badges'] as $badge)
                        @if ($badge['type'] === 'discount')
                            <span class="discount d-flex">{{ $badge ['value'] }}</span>
                        @endif
                        @if ($badge['type'] === 'tag')
                            <span class="eco d-flex">{{ $badge ['value'] }}</span>
                        @endif

                    @endforeach

                </div>
            </div>
        @endforeach
    @endsection
