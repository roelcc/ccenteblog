@extends('layouts.app')
@section('content')


    <div class="page-content container-fluid">

        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Nosotros</h3>

            </div>
            <div class="widget-body">
                @if (session('notification'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                        {{ session('notification') }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <fieldset>
                    @if($about_us->file)
                        <img src="{{ $about_us->file }}" class="img-responsive">
                    @endif
                    <span id="status1" class="pull-right"></span>
                    {{--¿Qué tipo de empresa es?--}}
                    {!! $about_us->question_1 !!}

                    <span id="status2" class="pull-right"></span>
                    {{--¿Cuál es su especialización?--}}
                    {!! $about_us->question_2 !!}

                    <span id="status3" class="pull-right"></span>
                    {{--¿Cuándo, cómo y dónde se creó la empresa?--}}
                    {!! $about_us->question_3 !!}

                    <span id="status4" class="pull-right"></span>
                    {{--¿Qué servicios ofrecen?--}}
                    {!! $about_us->question_4 !!}

                    <span id="status5" class="pull-right"></span>
                    {{--¿Cuáles con los objetivos de la empresa?--}}
                    {!! $about_us->question_5 !!}

                    <span id="status6" class="pull-right"></span>
                    {{--¿Cómo ven el futuro de la empresa?--}}
                    {!! $about_us->question_6 !!}
                </fieldset>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Seccion de imàgenes</h3>
                <ul class="widget-tools pull-right list-inline">
                    <li>
                        <a href="/nosotros/imagenes" title="imagenes" style="color: #57caff; font-size: 1.4em;">
                            <i class="glyphicon glyphicon-picture"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="widget-body row">
                {{--@foreach ($about_us->images as $image)--}}
                    {{--<div class="col-md-3">--}}
                        {{--<div class="widget">--}}
                            {{--<div class="widget-heading">--}}
                                {{--<h3 class="widget-title">{{ $image->name ?: auth_trans('panel/web-content/about-us.nameless') }}</h3>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body">--}}
                                {{--<div class="thumbnail">--}}
                                    {{--<img src="{{ $image->fullPath }}"--}}
                                         {{--alt="{{ $image->name ?: auth_trans('panel/web-content/about-us.image_no_name') }}"--}}
                                         {{--title="{{ $image->description ?: auth_trans('panel/web-content/about-us.no_description') }}">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            </div>
        </div>


    </div>

    @endsection