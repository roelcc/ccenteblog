@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="{{ url('/abouts') }}" method="POST">
                    {{ csrf_field() }}


                        <h3>
                            Titulo
                        </h3>
                        <div class="form-group">
                            <input title="title" class="form-control" name="title" value="{{ old('title', $about_us->title) }}" >
                        </div>
                    <h3>
                        Imagen
                    </h3>
                    <div class="form-group">
                        <input type="file" name="file" value="{{old('file', $about_us->file)}}">
                    </div>

                        <h3>
                            question 1
                        </h3>
                        <div class="form-group">
                            <textarea class="form-control"  title="Question_1" name="question_1">{{ old('question_1', $about_us->question_1) }}</textarea>
                        </div>

                        <h3>
                            Question 2
                        </h3>
                        <div class="form-group">
                            <textarea class="form-control" title="question 2" name="question_2">{{ old('question_2', $about_us->question_2) }}</textarea>
                        </div>

                        <h3>
                            Question 3
                        </h3>
                        <div class="form-group">
                            <textarea class="form-control" title="question 3" name="question_3">{{ old('question_3', $about_us->question_3) }}</textarea>
                        </div>

                        <h3>
                            Queestion 4
                        </h3>
                        <div class="form-group">
                            <textarea class="form-control" title="question 4" name="question_4">{{ old('question_4', $about_us->question_4) }}</textarea>
                        </div>

                        <h3>
                            Question 5
                        </h3>
                        <div class="form-group">
                            <textarea class="form-control" title="question 5" name="question_5">{{ old('question_5', $about_us->question_5) }}</textarea>
                        </div>

                        <h3>
                            Question 6
                        </h3>
                        <div class="form-group">
                            <textarea class="form-control"  title="question 6" name="question_6">{{ old('question_6', $about_us->question_6) }}</textarea>
                        </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                            {{--{{ auth_trans('general/buttons.save_changes') }}--}}
                            enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    {{--<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>--}}
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function(){
//            $("#name, #slug").stringToSlug({
//                callback: function(text){
//                    $('#slug').val(text);
//                }
//            });

            CKEDITOR.config.height = 120;
            CKEDITOR.config.width  = 'auto';

            CKEDITOR.replace('question_1');
            CKEDITOR.replace('question_2');
            CKEDITOR.replace('question_3');
            CKEDITOR.replace('question_4');
            CKEDITOR.replace('question_5');
            CKEDITOR.replace('question_6');
        });
    </script>
@endsection