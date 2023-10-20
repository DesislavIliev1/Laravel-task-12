@extends('adminlte::page')

@section('title', 'Manage users')

@section('content_header')
    <h1>Manage users</h1>
@stop

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3>Edit User</h3>
        </div>
    <div class="card-body">
        <form method="POST" class="user-form">
            @method('POST')
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter name" value="{{$user->name ?? '' }}" >
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter email" value="{{$user->email ?? '' }}" >
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter phone" value="{{$user->phone ?? '' }}" >
                    @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter password" value="" >
                    @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary saveUser" >Save</button>
            </div>

        </form>
    </div>    


    </div>
</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop