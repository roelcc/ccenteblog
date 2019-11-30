@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1>Lista de Servicios</h1>

                @foreach($services as $service)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $service->name }}</div>

                        <div class="panel-body">
                            @if($service->file)
                                <img src="{{ $service->file }}" class="img-responsive">
                            @endif

                            {{ $service->question_1 }}
                            <a href="{{ route('service', $service->slug) }}" class="pull-right">Leer más</a>
                        </div>
                    </div>
                @endforeach

                {{ $services->render() }}
            </div>
        </div>
    </div>
@endsection
