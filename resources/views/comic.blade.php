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
            <h3 class="text-uppercase text-right">Advertisement</h2>
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
        <div class="col-12 col-md-6">
          <div class="talent-wrapper">
            <h2>Talent</h2>
            <ul>
              <li>
                <h4>Art by:</h4>
                <div class="artists">
                  @foreach ($comic['artists'] as $artist)
                    {{-- Cannot use indentation because of the space around the coma ',' --}}
                      <a href="#">{{$artist}}</a>{{ !$loop->last ? ',' : ''}}
                  @endforeach
                </div>
              </li>
              <li>
                <h4>Written by:</h4>
                <div class="writers">
                  @foreach ($comic['writers'] as $writer)
                    {{-- Cannot use indentation because of the space around the coma ',' --}}
                    @if(!$loop->last)
                      <a href="#">{{$writer}}</a>,
                    @endif
                  @endforeach
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="specs-wrapper">
            <h2>Specs</h2>
            <ul>
              <li>
                <h4>Series:</h4>
                <a href="#" class="text-uppercase">
                  {{$comic['series']}}
                </a>
              </li>
              <li>
                <h4>U.S. Price: </h4>
                <span>{{$comic['price']}}</span>
              </li>
              <li>
                <h4>On sale date: </h4>
                <span>{{DateTime::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y')}}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>  {{-- Closing Section Comic-info container --}}
  </section>
  <section id="comic-links">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul>
            <li>
              <a href="#">
                <h5>Digital comics</h5>
                <div class="link-icon"></div>
              </a>
            </li>
            <li>
              <a href="#">
                <h5>Shop dc</h5>
                <div class="link-icon"></div>
              </a>
            </li>
            <li>
              <a href="#">
                <h5>Comic shop locator</h5>
                <div class="link-icon"></div>
              </a>
            </li>
            <li>
              <a href="#">
                <h5>Subscriptions</h5>
                <div class="link-icon"></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>  {{-- Closing Section Comic-links container --}}
  </section>
@endsection
