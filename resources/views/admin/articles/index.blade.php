@extends('admin.template.main')
@section('title', 'Listar Articulos')
@section('content')
  <div class="row">
    <div class="col-md-6">
      <a href="{{ route('articles.create') }}" class="btn btn-info">Registrar Nuevo Articulo</a>
    </div>
    <div class="col-md-6">
      <!--BUSCADOR DE ARTICULO -->
      {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'pull-right']) !!}
        <div class="input-group">
          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar articulo...']) !!}
          <span class="input-group-btn" >
            {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
          </span>
        </div>
      {!! Form::close() !!}
      <!-- ./ BUSCADOR DE ARTICULO -->
    </div>
  </div>
  <br>
    <table class='table table-striped table-bordered table-hover table-condensed'>
      <thead>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Categoria</th>
          <th>User</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        @foreach($articles as $article)
        <tr>
          <td>{{ $article->id }}</td>
          <td>{{ $article->title }}</td>
          <td>{{ $article->category->name }}</td>
          <td>{{ $article->user->name }}</td>
          <td>
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-wrench"></span></a>
            <a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('¿Seguro que deaseas eliminarlo?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  {!! $articles->render() !!}
@endsection
