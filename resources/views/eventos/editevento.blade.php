@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar evento</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                {!!Form::model([],['action'=>['EventoController@update',$evento->id],'method'=>'PUT'])!!}
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre" value="{{$evento->nombre}}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="fecha" class="form-control br-radius-zero"  placeholder="fecha" value="{{$evento->fecha}}"/>
                        </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Modificar</button>
                                  {!! link_to_action('EventoController@destroy', $title = 'Eliminar', $parameters = $evento->id, $attributes = ['class'=>'btn btn-danger'])!!}
                          </div>
                      </div>
                    </div>
                  {!!Form::close()!!}
                    
                </div>
            	</div>
        	</div>
    	</div>
	</div>
@endsection