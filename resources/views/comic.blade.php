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
    </div>
  </section>
  <section id="comic-description">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>{{$comic['description']}}</p>
        </div>
      </div>
    </div>
  </section>
  <section id="comic-info">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>Price: {{$comic['price']}}</p>
          <p>Sale date: {{$comic['sale_date']}}</p>
        </div>
      </div>
    </div>
  </section>
  <section id="comic-links">
    <div class="container">
      <div class="row">
        <div class="col-12">
          prova links
        </div>
      </div>
    </div>
  </section>
@endsection
