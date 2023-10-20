@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    <p>User list</p>
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>
        <a href="{{route('carAdminusersedit', $user->id)}}" class="btn btn-primary btn-sm">
            <i class="fas fa-edit"></i>
        </a>
        <a href="{{route('carAdminusersdelete', $user->id)}}" class="btn btn-danger btn-sm">
            <i class="fas fa-edit"></i>
        </a>
      </td>
    </tr>
    @endforeach
   
  </tbody>
  ...
</table>
<div class="d-flex mt-3">
    {!! $users->links() !!}
</div> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop