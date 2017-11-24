@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <h1>Registros</h1>
                        @foreach($laboratorios as $lab)
                        {!! link_to_action('RegistroController@edit', $title = 'Laboratorio:', $parameters = $lab->id, $attributes = ['class'=>'links2'])!!}<p>{{$lab->nombre}}</p>
                        <p>Encargado: {{$lab->encargado}}</p>
                        <p>Eventos: </p>
                        <ul>
                            @foreach($registros as $regis)
                                @if($lab->id == $regis->laboratorio_id)
                                    <li>{{$regis->nombreve}}</li>
                                @endif
                            @endforeach
                        </ul>
                        ------------------------------------------<br>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
