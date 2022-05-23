@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" style="min-height: 555px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="card-body table-responsive p-0 ">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{$client->id}}</td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td>{{$client->name}}</td>
                        </tr>
                        <tr>
                            <td>Телефон</td>
                            <td>{{$client->phone}}</td>
                        </tr>
                        <tr>
                            <td>Адрес</td>
                            <td>{{$client->location}}</td>
                        </tr>
                        <tr>
                            <td>Почта</td>
                            <td>{{$client->email}}</td>
                        </tr>

                        <tr>
                            <td>Тема</td>
                            <td>{{$client->topic->title}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="{{route('admin.client.edit',$client->id)}}" class="btn btn-warning">Изменить</a>
                </div>
                <!-- /.row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
