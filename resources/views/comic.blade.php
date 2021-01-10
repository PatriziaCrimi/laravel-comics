@extends('layouts.app')

@section('page-title', $comic['series'] . ' | DC')

@section('section')
  <section id="comic-thumb" class="text-uppercase">
    <div class="container thumb">
      <div class="row">
        <div class="col-12">
          <div class="thumb-wrapper">
            <a href="#">
              <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
              <div class="comic-type text-center" href="#">Comic book</div>
              <div class="view-gallery text-center" href="#">View gallery</div>
            </a>
          </div>
        </div>
      </div>
    </div>  {{-- Closing Section Comic-thumb container --}}
  </section>
  <section id="comic-description">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <h1 class="text-uppercase">{{$comic['title']}}</h1>
          {{-- Comic-info Mobile --}}
          <div class="comic-info-mobile">
            <div class="price-availability">
              <div class="price float-left">
                <span>U.S. Price: </span>
                <span class="us-price">{{$comic['price']}}</span>
              </div>
              <span class="availability text-uppercase float-right">Available</span>
            </div>
            <div class="check-availability">
              <a class="text-capitalize" href="#">Check availability</a>
            </div>
          </div>
          {{-- Comic-info Desktop --}}
          <div class="comic-info-desktop justify-content-between align-items-center">
            <div class="price">
              <span>U.S. Price: </span>
              <span>{{$comic['price']}}</span>
            </div>
            <div class="availability">
              <span class="text-uppercase available">Available</span>
              <a class="text-capitalize" href="#">Check availability</a>
            </div>
          </div>
          {{-- Description --}}
          <p class="description text-justify">{{$comic['description']}}</p>
        </div>
        <div class="col-12 col-lg-4">
          <div class="adv">
            <h2 class="text-uppercase text-right">Advertisement</h2>
            <a class="adv-picture">
              <img src="{{asset('img/adv_ok.jpg')}}" alt="Advertisement picture">
            </a>
          </div>
        </div>
      </div>
    </div>  {{-- Closing Section Comic-descritpion container --}}
  </section>
  <section id="comic-details">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>Price: {{$comic['price']}}</p>
          <p>Sale date: {{$comic['sale_date']}}</p>
        </div>
      </div>
    </div>  {{-- Closing Section Comic-info container --}}
  </section>
  <section id="comic-links">
    <div class="container">
      <div class="row">
        <div class="col-12">
          prova links
        </div>
      </div>
    </div>  {{-- Closing Section Comic-links container --}}
  </section>
@endsection
