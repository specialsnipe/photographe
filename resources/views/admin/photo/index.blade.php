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
                        <th scope="col">Фотография</th>
                        <th scope="col">Размер файла</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Тема</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($photos as $photo)
                    <tr>
                        <th scope="row">{{$photo->id}}</th>
                        <td class="w-25"><a href="{{route('admin.photo.show',$photo->id)}}"><img src="{{url($photo->url)}}" width="20%" height="20%" alt="image"></a></td>
                        <td>{{$photo->size . ' байт'}}</td>
                        <td>{{$photo->description}}</td>
                        <td><a href="{{route('admin.photo.topic.index',$photo->topic->id)}}">{{$photo->topic->title}}</a></td>

                        <td>
                            <a href="{{route('admin.photo.edit',$photo->id)}}" class="btn btn-warning">Изменить</a>
                        </td>

                        <td>
                            <form action="{{route('admin.photo.delete',$photo->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger " value="Удалить">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="mt-3">
                    {{$photos->withQueryString()->links()}}
                </div>
                <div class="col-2 mt-3">
                    <a href="{{route('admin.photo.create')}}"
                       class="btn btn-block btn-primary">Добавить фотографию</a>
                </div>



                <!-- /.row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
