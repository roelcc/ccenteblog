@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver entrada
                </div>

                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $service->name }}</p>
                    <p><strong>Slug</strong> {{ $service->slug }}</p>
                    <p><strong>Descripción</strong>
                        <br>
                        {{--{{ $service->question_1 }}--}}
                        {!! $service->question_1  !!}
                        {!! $service->question_2  !!}
                        {!! $service->question_3  !!}
                        {!! $service->question_4  !!}
                        {!! $service->question_5  !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
