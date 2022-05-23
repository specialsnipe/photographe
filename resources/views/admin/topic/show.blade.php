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
                            <td>{{$topic->id}}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{$topic->title}}</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>{{$topic->description}}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="row">
                    <div class="col-1 mt-3">
                        <a href="{{route('admin.topic.edit',$topic->id)}}"
                           class="btn btn-warning ">Изменить</a>
                    </div>
                    <div class="col-1 mt-3">
                        <form action="{{route('admin.topic.delete',$topic->id)}}"
                              method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger " value="Удалить">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
