@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Nosotros
                </div>

                <div class="panel-body">
                    {!! Form::model($aboutUs, ['route' => ['aboutUs.update', $aboutUs->id], 'method' => 'PUT', 'files' => true]) !!}
                        
                        @include('admin.aboutUs.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
