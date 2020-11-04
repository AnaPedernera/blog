@extends('layouts.app')

@section('content') 
    <div class="container-fluid"  >
        <div class="row " >
            <div class="col-12 align-self-center">

                <h1 class="font-weight-bold text-uppercase m-5 text-center"> Editar Entrada Blog</h1>
                <div style="max-width:60%; margin-left: auto; margin-right: auto;">
                    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method'=> 'PUT']) !!}

                    <div class="form-group">
                        {{Form::label('titulo', 'Titulo' ) }}
                        {{Form::text('titulo', $post->titulo, ['class' => 'form-control', 'placeholder'=>'Titulo']) }}
                    </div>

                    <div class="form-group">
                        {{Form::label('contenido', 'Contenido' ) }}
                        {{Form::textarea('contenido', $post->contenido, ['class' => 'form-control', 'placeholder'=>'Ingrese texto de la nueva entrada...']) }}
                    </div>

                    <div class="col text-center">
                        {{ Form::submit("Guardar", ['class'=> 'btn btn-primary']) }}	
                    </div>	
                    {!! Form::close() !!}
                </div>
            </div>          
        </div>
    
    </div>
@endsection
