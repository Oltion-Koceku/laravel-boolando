@extends('layout.main')

@section('content')

<div class="container d-flex ">
    <div class="product">
        <img class="foto1" src="getPathImage(this.urlImg)" alt="">
        <img :src="'src/assets/img/'+urlImg2" alt="1b">
        {{-- <p>{{ brand }}</p>
        <h3>{{nameProduct}}</h3>
        <span class="prezzo">{{priceProduct}} &euro;</span> --}}
        <div  class="badges">
          <span :class="productData.isInFavorites === true ? 'red' : '' " class="cuore d-flex ">&hearts;</span>
          {{-- <span v-for="(i, indice) in productData.badges" :key="indice" v-show="i.type === 'discount'" class="discount d-flex">{{ i.value }}</span> --}}
          {{-- <span v-for="(i, indice) in productData.badges" :key="indice" v-show="i.type === 'tag'" class="eco d-flex">{{ i.value }}</span> --}}

        </div>
      </div>

@endsection
