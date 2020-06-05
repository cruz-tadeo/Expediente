@extends('layout')

@section('content')
    <div class="card">
        <div class="card-body">
        <form action="{{route('update-user', $data[0]['id'])}}" method="POST">
            @csrf
                <div class="form-group">
            <label for="username"></label>
            <input type="text" class="form-control" id="username" value="{{$data[0]['username']}}" disabled>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="text" class="form-control" id="email" value="{{$data[0]['email']}}" disabled>
                </div>
            </div>
            <div class="ml-4">
                <h6>Roles</h6>
                
                    <select class="form-control col-sm-2" name="roles" id="roles">
                        @foreach ($data[1] as $role)
                    <option value="{{$role->name}}" @if($data[0]->getRoleNames()->first() == $role->name) selected @endif}}>{{$role->name}}</option>
                         @endforeach
                    </select>
               
            </div>
            <div class=" card-footer float-right">
            <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
            </div>
            </form>
           
            
        </div>
    </div>
@endsection