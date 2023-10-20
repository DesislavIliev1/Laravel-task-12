@extends('adminlte::page')

@section('title', 'Cars User')

@section('content_header')
    <h1>Cars User</h1>
@stop

@section('content')
    <p>Cars User list</p>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cars User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>#</th>
                                <th>User</th>
                                <th>Cars</th>

                            </thead>
                            <tbody>
                                @foreach ($carsUser as $carUser)
                                    <tr>
                                        <td>{{$carUser->id}}</td>
                                        <td>{{$carUser->user->name ?? ''}}</td>
                                        <td>{{$carUser->car->model ?? ''}}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop