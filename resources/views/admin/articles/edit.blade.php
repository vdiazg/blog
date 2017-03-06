@extends('admin.template.main')
@section('title', 'Editar Articulo')
@section('content')
  {!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT', 'files' => true]) !!}
      <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Titulo del Articulo', 'required']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content', $article->content, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select_tag', 'multiple', 'data-placeholder' => 'Seleccione un maximo de 3 opciones']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Editar Articulo', ['class' => 'btn btn-primary']) !!}
      </div>
  {!! Form::close() !!}
@endsection
@section('js')
  <script type="text/javascript">
    $('.select_tag').chosen({
      max_selected_options: 3,
      no_results_text: "No se encontraron tags"
    });
    $('#category_id').chosen({
      no_results_text: "No se encontraron tags"
    });
    $('#content').trumbowyg();
  </script>
@endsection
