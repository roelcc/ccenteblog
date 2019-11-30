@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear Servicio
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'services.store', 'files' => true]) !!}
                        
                        @include('admin.services.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
