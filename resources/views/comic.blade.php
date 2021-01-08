@extends('layouts.app')

@section('page-title', $comic['series'] . ' | DC')

@section('section')
  <section id="comic-thumb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        </div>
      </div>
    </div>
  </section id="comic-description">
  <section>
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
