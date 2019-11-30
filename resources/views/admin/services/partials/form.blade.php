{{ Form::hidden('user_id', auth()->user()->id) }}

{{--<div class="form-group">--}}
	{{--{{ Form::label('category_id', 'Categorías') }}--}}
	{{--{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}--}}
{{--</div> --}}
<div class="form-group">
    {{ Form::label('name', 'Nombre del Servicio') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
	{{ Form::label('short_name', 'Nombre del corto del servicio') }}
	{{ Form::text('short_name', null, ['class' => 'form-control', 'id' => 'short_name']) }}
</div>
<div class="form-group">
    {{ Form::label('image', 'Imagen') }}
    {{ Form::file('image') }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'Estado') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} Borrador
	</label>
</div>

<div class="form-group">
    {{ Form::label('question_1', 'question_1') }}
    {{ Form::textarea('question_1', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
	{{ Form::label('question_2', 'question_2') }}
	{{ Form::textarea('question_2', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
	{{ Form::label('question_3', 'question_3') }}
	{{ Form::textarea('question_3', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
	{{ Form::label('question_4', 'question_4') }}
	{{ Form::textarea('question_4', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
	{{ Form::label('question_5', 'question_5') }}
	{{ Form::textarea('question_5', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });

	    CKEDITOR.config.height = 250;
		CKEDITOR.config.width  = 'auto';

		CKEDITOR.replace('question_1');
        CKEDITOR.replace('question_2');
        CKEDITOR.replace('question_3');
        CKEDITOR.replace('question_4');
        CKEDITOR.replace('question_5');
	});
</script>
@endsection