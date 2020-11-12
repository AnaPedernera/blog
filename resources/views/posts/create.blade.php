@extends('layouts.app')

@section('content')
    <div class="container-fluid"  >
        <div class="row " >
            <div class="col-12 align-self-center">
                    
                <h2 class="font-weight-bold text-uppercase m-5 text-center"> Crear Entrada Blog</h2>

                <div style="max-width:60%; margin-left: auto; margin-right: auto;">
                    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method'=> 'POST']) !!}

                        <div class="form-group">
                            {{Form::label('titulo','Titulo') }}
                            {{Form::text('titulo','', ['class' => 'form-control', 'placeholder'=>'Titulo']) }}
                        </div>

                        <div class="form-group">
                            {{Form::label('contenido', 'Contenido' ) }}
                            {{Form::textarea('contenido', '', ['class' => 'form-control', 'placeholder'=>'Ingrese texto de la nueva entrada...']) }}
                        </div>
                        <div class="form-group">

                        {{Form::label('tags','Tags')}}<br>
                            @foreach($tags as $tag)
                               { !!form::checkbox('tags',$tag->id, false)!!}{{$tag->nombre}}
                            @endforeach
                        </div>
                           
                        <div class="col text-center">
                                {{ Form::submit("Guardar", ['class'=> 'btn btn-secondary']) }}
                        </div>

                    {!! Form::close() !!}   
                    
                </div>

            </div>
        </div>
    </div>

@endsection
