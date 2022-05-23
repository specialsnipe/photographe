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
                <div class="row">
                    <form action="{{route('admin.client.store')}}" method="post" class="w-50">
                        @csrf
                        <div class="form-group ">
                            <input type="text" class="form-control " name="name" placeholder="ФИО" value="{{old('name')}}">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <input type="number" class="form-control  mt-3" name="phone" placeholder="Номер телефона" value="{{old('phone')}}">
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control mt-3" name="location" placeholder="Адрес" value="{{old('location')}}">
                            @error('location')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control mt-3" name="email" placeholder="Почта" value="{{old('email')}}">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Тема</label>
                            <select name="topic_id" class="form-control">
                                @foreach($topics as $topic)
                                    <option value="{{$topic->id}}
                            {{$topic->id==old('crops_id') ?'selected':''}}">
                                        {{$topic->title}}</option>
                                @endforeach
                            </select>
                            @error('topic_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>


                </div>
                <!-- /.row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
