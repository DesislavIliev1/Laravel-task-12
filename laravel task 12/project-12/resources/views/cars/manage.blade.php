@extends('adminlte::page')

@section('title', 'Manage users')

@section('content_header')
    <h1>Manage cars</h1>
@stop

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3>Edit Car</h3>
        </div>
    <div class="card-body">
        <form method="POST" class="user-form">
            @method('POST')
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter name" value="{{$car->name ?? '' }}" >
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Model</label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" id="model" placeholder="Enter model" value="{{$car->model ?? '' }}" >
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="name">Color</label>
                    <input type="text" class="form-control @error('color') is-invalid @enderror" name="color" id="color" placeholder="Enter color" value="{{$car->color ?? '' }}" >
                    @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                

            <div class="card-footer">
                <button type="submit" class="btn btn-primary saveCar" >Save</button>
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