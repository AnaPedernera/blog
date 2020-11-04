@extends('layouts.app')

@section('content')
  <div class="container-fluid" >
    <div class="row" >
      <div class=" col-11 text-center m-5 ">
        <h2 class="font-weight-bold text-uppercase m-4 text-center">{{$post->titulo}} </h2>
        <p class="m-4 p-5"> {{$post->contenido}} </p>
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
   





