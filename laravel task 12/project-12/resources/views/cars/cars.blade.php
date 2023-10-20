@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Cars</h1>
@stop

@section('content')
    <p>Cars list</p>
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col"># </th>
      <th scope="col">Car Name</th>
      <th scope="col"> Car - Model</th>
      <th scope="col"> Car - Color</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($cars as $car)
    <tr>
      <th scope="row">{{$car->id}}</th>
      <td>{{$car->name}}</td>
      <td>{{$car->model}}</td>
      <td>{{$car->color}}</td>
      <td>
        <a href="{{route('carAdmincarsedit', $car->id)}}" class="btn btn-primary btn-sm">
            <i class="fas fa-edit"></i>
        </a>
        <a href="{{route('carAdmincarsdelete', $car->id)}}" class="btn btn-danger btn-sm">
            <i class="fas fa-edit"></i>
        </a>
      </td>
    </tr>
    @endforeach
   
  </tbody>
  ...
</table>
<div class="d-flex mt-3">
    
</div> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop