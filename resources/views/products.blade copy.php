@extends('layouts.app')


@section('content')

<div class="container">
  <h1>Prodcuts</h1>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
    @forelse($products as $pasta)
    <div class="col">
      <div class="card text-center">
        <img class="card-img-top" src="{{$pasta['src']}}" alt="">
        <div class="card-body">
          {{$pasta['titolo']}}
        </div>
      </div>
    </div>
    @empty
    <div class="col">
      <p>Nothing to show yet!</p>
    </div>
    @endforelse

  </div>
</div>


@endsection
