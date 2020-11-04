@extends('layouts.app')

  @section('content')
  <h2 class="font-weight-bold text-uppercase text-center m-5"> Todas las entradas </h2>

  @if(count($posts) > 0)
      @foreach($posts as $post)
        <div class="card  p-4  m-4" >
            <h5 class="text-uppercase pl-5 text-center "> <a href="/posts/{{$post->id}}" class="text-decoration-none text-dark"> {{ $post->titulo }} </a></h5>
            
        </div>
      @endforeach
  @endif


@endsection
