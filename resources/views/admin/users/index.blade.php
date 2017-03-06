@extends('admin.template.main')
@section('title', 'Lista de Usuarios')
@section('content')
  <a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a><br><br>
  <table class='table table-striped table-bordered table-hover table-condensed'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if($user->type == 'admin')
            <span class="label label-danger">{{ $user->type }}</span>
          @else
            <span class="label label-primary">{{ $user->type }}</span>
          @endif
        </td>
        <td>
          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-wrench"></span></a> 
          <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deaseas eliminarlo?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {!! $users->render() !!}
@endsection
