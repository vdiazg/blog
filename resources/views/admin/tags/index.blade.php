@extends('admin.template.main')
@section('title', 'Lista de Tag')
@section('content')
  <div class="row">
    <div class="col-md-6">
      <a href="{{ route('tags.create') }}" class="btn btn-info">Registrar Nuevo Tag</a>
    </div>
    <div class="col-md-6">
      <!--BUSCADOR DE TAGS -->
      {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'pull-right']) !!}
        <div class="input-group">
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...']) !!}
          <span class="input-group-btn" >
            {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
          </span>
        </div>
      {!! Form::close() !!}
      <!-- ./ BUSCADOR DE TAGS -->
    </div>
  </div>
<br>
  <table class='table table-striped table-bordered table-hover table-condensed'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tags as $tag)
        <tr>
          <td>{{ $tag->id }}</td>
          <td>{{ $tag->name }}</td>
          <td>
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-wrench"></span></a>
            <a href="{{ route('tags.destroy', $tag->id) }}" onclick="return confirm('¿Seguro que deaseas eliminarlo?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!! $tags->render() !!}
  @endsection
