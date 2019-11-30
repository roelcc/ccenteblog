@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1>{{ $service->name }}</h1>

                <div class="panel panel-default">
                    <div class="panel-heading">
                       {{$service->short_name}}
                        {{--<a href="{{ route('category', $post->category->slug) }}">--}}
                            {{--{{ $post->category->name }}--}}
                        {{--</a>--}}
                    </div>

                    <div class="panel-body">
                        @if($service->file)
                            <img src="{{ $service->file }}" class="img-responsive">
                        @endif


                            {!! $service->question_1 !!}

                        <hr>
                            {!! $service->question_2 !!}
                        <hr>

                        {{--Etiquetas--}}
                        {{--@foreach($post->tags as $tag)--}}
                            {{--<a href="{{ route('tag', $tag->slug) }}">--}}
                                {{--{{ $tag->name }}--}}
                            {{--</a>--}}
                        {{--@endforeach--}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection