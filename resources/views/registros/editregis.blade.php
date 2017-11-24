@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar registro</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                {!!Form::model([],['action'=>['RegistroController@update',$laboratorio->id],'method'=>'PUT'])!!}
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                         <label for="sel1">Laboratorio: {{$laboratorio->nombre}}</label>
                         <div class="form-group">
                                <label for="sel1">Eventos:</label>
                                <select class="form-control chosen"  name="reg[]" multiple>
                                @foreach ($evento as $reg)
                                      <option value="{{$reg->id}}">{{$reg->nombre}}</option>
                                @endforeach
                                </select>
                          </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Modificar</button>
                                  {!! link_to_action('RegistroController@destroy', $title = 'Eliminar', $parameters = $laboratorio->id, $attributes = ['class'=>'btn btn-danger'])!!}
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