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
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Почта</th>
                        <th scope="col">Тема</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td><a href="{{route('admin.client.show',$client->id)}}">{{$client->name}}</a></td>
                        <td>{{$client->phone}}</td>
                        <td>{{$client->location}}</td>
                        <td>{{$client->email}}</td>
                        <td><a href="{{route('admin.client.show',$client->topic->id)}}">{{$client->topic->title}}</a></td>
                        <td>
                            <a href="{{route('admin.client.edit',$client->id)}}" class="btn btn-warning">Изменить</a>
                        </td>

                        <td>
                            <form action="{{route('admin.client.delete',$client->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger " value="Удалить">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-2 mt-3">
                    <a href="{{route('admin.client.create')}}"
                       class="btn btn-block btn-primary">Добавить клиента</a>
                </div>
                <!-- /.row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
