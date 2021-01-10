@extends('layouts.app')

@section('page-title', 'Error | 404')

@section('section')
  <section id="error" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-uppercase">Error 404</h1>
          <p>Sorry, page not found!</p>
          <a href="{{route('homepage')}}" class="btn-primary text-uppercase">Back to Homepage</a>
        </div>
      </div-row>
    </div>
  </section>
@endsection
