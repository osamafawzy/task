@extends('admin.layouts.master')
@section('title')
    Admin
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
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">

                        <h3 class="profile-username text-center">{{$person->firstname}}</h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Price</b> <a class="pull-right">{{$person->lastname}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Currency</b> <a class="pull-right">{{$person->country}}</a>
                            </li>
                        </ul>

                        <a href="{{url('/admin/person/'.$person->id.'/edit')}}" class="btn btn-primary btn-block"><b>Edit</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Details</a></li>
                        <li><a href="#timeline" data-toggle="tab">Photos</a></li>
                        <li><a href="#bookings" data-toggle="tab">Bookings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <span>
                                        <h3>Description</h3>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                   {!!$person->notes!!}
                                </p>
                            </div>
                            <!-- /.post -->
                            <div class="post">
                                <div class="user-block">
                                    <span>
                                        <h3>address1</h3>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    {!!$person->address1!!}
                                </p>
                            </div>
                            <!-- /.post -->
                            <div class="post">
                                <div class="user-block">
                                    <span>
                                        <h3>address2</h3>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    {!!$person->address2!!}
                                </p>
                            </div>

                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                            <ul class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <li class="time-label">
                        <span class="bg-green">
                          {{$person->created_at->format('d/m/Y')}}
                        </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-camera bg-purple"></i>

                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><strong>{{$person->firstname}}</strong> photos</h3>
                                        <form method="post" action="">
                                            {{csrf_field()}}
                                            <div class="timeline-body " id="trip-image">

                                                <ul>
                                                            @foreach($person->photos as $photos)
                                                                <li>

                                                                    <input type="checkbox" id="delete" name="delete[]" value="{{$photos->id}}">
                                                                    {{--@if ($errors->has('delete[]'))--}}
                                                                        {{--<span class="help-block">--}}
                                                                            {{--<strong>{{ $errors->first('delete[]') }}</strong>--}}
                                                                        {{--</span>--}}
                                                                    {{--@endif--}}
                                                                    <a href="{{Request::root()}}/public/uploads/person/{{$photos->photo}}" data-lightbox="image-1">
                                                                        <img src="{{Request::root()}}/public/uploads/person/{{$photos->photo}}" alt="..." class="margin profile-user-img">
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                </ul>
                                            </div>

{{--

                                            @if($person->photos())
                                                <button type="submit" class="btn btn-info pull-right" style="margin-top: 10px;">Delete <i class="fa fa-trash" style="margin-left: 5px"></i></button>
                                            @endif
                                        </form>


                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <li>
                                    <i class="fa fa-clock-o bg-gray"></i>
                                </li>
                            </ul>
                        </div>
                        <!-- /.tab-pane -->




                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">

            </div>

            <div class="col-md-12">
                <br>
            </div>
        </div>


    </section>

@endsection

@section('css')
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">--}}
    <link rel="stylesheet" href="{{ asset('assets/bower_components/dropzone-master/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/lightbox2-master/lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/jQuery-Tags-Input-master/dist/jquery.tagsinput.min.css')}}">

    <style>
        .timeline-body ul {
            list-style: none;
            display: inline-block;
        }
        .timeline-body ul li {
            display: inline;
        }
        .timeline-body ul li a img{
            width: 20%;
            height: 40%;
        }

    </style>
    <style>
        div.tagsinput span.tag {
            border: 1px solid #66c0e0;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            display: block;
            float: left;
            padding: 5px;
            text-decoration: none;
            background: #66c0e0;
            color: #ffffff;
            margin-right: 5px;
            margin-bottom: 5px;
            font-family: helvetica;
            font-size: 10px;
            border-radius: 10px;
        }
        div.tagsinput{
            border:none;


        }
        div.tagsinput span.tag a {
            display: none;
        }
    </style>
@endsection

@section('js')
    <script src="{{ asset('assets/bower_components/jQuery-Tags-Input-master/dist/jquery.tagsinput.min.js')}}"></script>

    <script>
        $('#meta_keywords').tagsInput({

            'width':'100%',
            'defaultText':'',
        });
    </script>
    <script src="{{ asset('assets/bower_components/dropzone-master/dropzone.min.js')}}"></script>

    <script src="{{ asset('assets/bower_components/lightbox2-master/lightbox.js')}}"></script>
    <script>
        Dropzone.options.addImages = {
            maxFilesize: 7,
            acceptedFiles: 'image/*',
        }

    </script>
@endsection
