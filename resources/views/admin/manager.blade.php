@extends('layout')

@section('content')
@if (session('message'))
<div class="alert alert-success" role="alert">
    {{session('message')}}
  </div>
@endif
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="btn-group-sm">
                        <a href="{{route('edit-user', $user->id)}}" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
</div>

@endsection