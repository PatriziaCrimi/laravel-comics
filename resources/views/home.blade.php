@extends('layouts.app')

@section('page-title', 'Comics | DC')

@section('section')
  <section id="comics" class="text-center">
    <div class="container">
      <div class="row">
        @foreach ($comics_list as $key => $album)
          <div class="col-12">
            <h2>{{$album['title']}}</h2>
            <img src="{{$album['thumb']}}" alt="{{$album['title']}}">
          </div>
        @endforeach
      </div>
    </div>   {{-- Closing Section-Comics container --}}
  </section>
@endsection
