@extends('layouts.app')

@section('page-title', 'Comics | DC')

@section('section')
  {{-- SECTION - Current Series --}}
  <section id="current-series" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12 text-left">
          <h1>Current series</h1>
        </div>
      </div>
      <div class="cards-wrapper">
        <div class="row">
          @foreach ($comics_list as $key => $album)
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
              <div class="card-album">
                <div class="thumb-album">
                  <img src="{{$album['thumb']}}" alt="{{$album['series']}}">
                </div>
                <h2 class="text-left">{{$album['series']}}</h2>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <button class="btn-primary text-uppercase" type="button" name="button">Load more</button>
        </div>
      </div>
    </div>   {{-- Closing Current-series container --}}
  </section>
  {{-- SECTION - Links --}}
  <section id="links" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="d-flex justify-content-between">
            <li>
              <a href="#">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="Digital comics">
                <span>Digital comics</span>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="Merchandise T-shirt">
                <span>De merchandise</span>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="Subscription cards">
                <span>Subscription</span>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="Locator">
                <span>Comic shop locator</span>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="Dc power visa box">
                <span>Dc power visa</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>  {{-- Closing Links container --}}
  </section>
@endsection
