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
                    <span v-for="(i, indice) in productData.badges" :key="indice" v-show="i.type === 'discount'"
                        class="discount d-flex">{{ $product['price'] }}</span>
                    <span v-for="(i, indice) in productData.badges" :key="indice" v-show="i.type === 'tag'"
                        class="eco d-flex">{{ $product['price'] }}</span>

                </div>
            </div>
        @endforeach
    @endsection
