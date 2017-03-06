@extends('admin.template.main')
@section('title', 'Lista de Categorias')
@section('content')
  <a href="{{ route('categories.create') }}" class="btn btn-info">Registrar Nueva Categoria</a><br><br>
  <table class='table table-striped table-bordered table-hover table-condensed'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>
          <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-wrench"></span></a>
          <a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('¿Seguro que deaseas eliminarlo?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
{!! $categories->render() !!}
@endsection
