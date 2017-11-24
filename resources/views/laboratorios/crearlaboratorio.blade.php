@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar Laboratorio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="labcreate" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="encargado" class="form-control br-radius-zero"  placeholder="Encargado"/>
                        </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Crear</button>
                          </div>
                      </div>
                    </div>
                  </form>
                    
                </div>
            	</div>
        	</div>
    	</div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar o eliminar laboratorio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="labmodificar" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                        <label for="sel1">Seleccione laboratorio:</label>
                            <select class="form-control" name="lab">
                            @foreach ($laboratorios as $lab)
                                  <option value="{{$lab->id}}">{{$lab->nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                        
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Detalle</button>
                          </div>
                      </div>
                    </div>
                  </form>
                    
                </div>
              </div>
          </div>
      </div>
	</div>
@endsection