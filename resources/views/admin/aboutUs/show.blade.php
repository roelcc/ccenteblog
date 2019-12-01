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
                    <p><strong>Nombre</strong> {{ $aboutUs->name }}</p>
                    <p><strong>Slug</strong> {{ $aboutUs->slug }}</p>
                    <p><strong>Descripción</strong>
                        <br>
                        {{--{{ $service->question_1 }}--}}
                        {!! $aboutUs->question_1  !!}
                        {!! $aboutUs->question_2  !!}
                        {!! $aboutUs->question_3  !!}
                        {!! $aboutUs->question_4  !!}
                        {!! $aboutUs->question_5  !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
