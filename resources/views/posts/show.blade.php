@extends('layouts.app')

@section('content')
  <div class="container" >
    <div class="row" >
      <div class=" col-11 text-center m-5 ">
        <h2 class="font-weight-bold text-uppercase m-4 ">{{$post->titulo}} </h2>

         <!-- tags -->
        <div class=" col-11 text-center m-5 ">
          @foreach($post->tags as $tag)
          <span class="border border-darck p-2 rounded  m-3 ">{{$tag->nombre}}</span> <br>
          @endforeach
        
        </div>
        <p class="m-4 p-5"> {{$post->contenido}} </p>
     
      <img class="w-50" src="/storage/portadas/{{$post->path_imagen}}">
      </div>
      <div class="col text-center">

      @if (!Auth::guest())
      @if(Auth::user()->id == $post->user_id)

        <a class="btn btn-secondary text-decoration-none" href="/posts/{{$post->id}}/edit">Editar entrada...</a>

        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=> 'DELETE']) !!}
          {{ Form::submit("Eliminar" ,['class'=> 'btn btn btn-secondary m-3']) }}
        {!! Form::close() !!}


      @endif
      @endif
    </div>
  </div>      
@endsection
   





