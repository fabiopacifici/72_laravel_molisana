@extends('layouts.app')


@section('content')
<div class="container">
  <h1>{{$page_title}}</h1>
  <p>{{$page_intro}}</p>

  <section class="posts row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
    @forelse($posts as $post)
    <div class="col">
      <div class="card">
        <img src="{{$post['cover']}}" class="card-img-top" />
        <div class="card-body">
          <h3>{{$post['title']}}</h3>
          <p>{{$post['body']}}</p>
        </div>
      </div>
    </div>
    @empty

    @endforelse
  </section>
</div>


@endsection
