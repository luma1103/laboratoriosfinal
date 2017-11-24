@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="registrocreate" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                             <div class="form-group">
                            <label for="sel1">Laboratorio:</label>
                                <select class="form-control" name="labo">
                                @foreach ($laboratorios as $lab)
                                      <option value="{{$lab->id}}">{{$lab->nombre}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Eventos:</label>
                                <select class="form-control chosen" name="eve[]" multiple>
                                @foreach ($eventos as $ev)
                                      <option value="{{$ev->id}}">{{$ev->nombre}}</option>
                                @endforeach
                                </select>
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
</div>
@endsection
