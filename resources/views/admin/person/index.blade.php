@extends('admin.layouts.master')
@section('title')
    Admin | Slider
@endsection
@section('page-header')
    <section class="content-header">
        <h1>
            Home Page
            <small></small>
        </h1>

    </section>
@endsection

@section('content')


    <section class="content">

        <div class="row">
            <div class="col-md-12">
                    <a href="{{url('/admin/person/create')}}" class="btn btn-primary pull-right margin-bottom">
                        <i class="fa fa-plus"></i>
                        Add new
                    </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                            Show All </h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>username</th>
                                <th>email</th>
                                <th>address</th>
                                <th>Action</th>
                            </tr>
                            @foreach($people as $person)
                                <tr>
                                    <td>{{$person->id}}</td>
                                    <td>{{$person->firstname}}</td>
                                    <td>{{$person->lastname}}</td>
                                    <td>{{$person->email}}</td>
                                    <td>
                                        <a href="{{url('/admin/person/'.$person->id.'/edit')}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                        <a href="{{url('/admin/person/'.$person->id.'/delete')}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                                        <a href="{{url('/admin/person/'.$person->id)}}" title="View" class="btn btn-success btn-circle"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>

        <br>

    </section>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/lightbox2-master/lightbox.css')}}">
@endsection

@section('js')

    <script src="{{ asset('assets/bower_components/lightbox2-master/lightbox.js')}}"></script>

@endsection
