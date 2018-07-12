@extends('admin.layouts.master')
@section('title')
    Add Person
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
            <!-- right column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{url('/admin/person')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="firstname" class="col-sm-1 control-label">firstname</label>
                                <div class="col-sm-5 {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="firstname" value="{{ old('firstname') }}" required autofocus>
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <label for="lastname" class="col-sm-1 control-label">lastname</label>
                                <div class="col-sm-5 {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastname" value="{{ old('lastname') }}" required autofocus>
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">

                                <label for="address1" class="col-sm-1 control-label">address1</label>
                                <div class="col-sm-11 {{ $errors->has('address1') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <input type="Location" name="address1" class="form-control" placeholder="address1" id="address1" value="{{ old('address1') }}">
                                        @if ($errors->has('address1'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('address1') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>

                                <label for="address2" class="col-sm-1 control-label">address2</label>
                                <div class="col-sm-11 {{ $errors->has('address2') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <input type="text" name="address2" class="form-control" placeholder="address2" id="address2" value="{{ old('address1') }}">
                                        @if ($errors->has('address2'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('address2') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>

                            </div>


                            <div class="form-group">

                                <label for="phone" class="col-sm-1 control-label">phone</label>
                                <div class="col-sm-11 {{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <input type="text" name="phone" class="form-control" placeholder="phone" id="phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>



                                <label for="email" class="col-sm-1 control-label">email</label>
                                <div class="col-sm-11 {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <input name="email" class="form-control" placeholder="address" id="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <label for="city" class="col-sm-1 control-label">city</label>
                                <div class="col-sm-11 {{ $errors->has('city') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <input type="text" name="city" class="form-control" placeholder="city" id="city" value="{{ old('city') }}">
                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>



                                <label for="country" class="col-sm-1 control-label">country</label>
                                <div class="col-sm-11 {{ $errors->has('country') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <input name="country" class="form-control" placeholder="country" id="country" value="{{ old('country') }}">
                                        @if ($errors->has('country'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <label for="postalcode" class="col-sm-1 control-label">postalcode</label>
                                <div class="col-sm-11 {{ $errors->has('postalcode') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <input type="text" name="postalcode" class="form-control" placeholder="postalcode" id="postalcode" value="{{ old('postalcode') }}">
                                        @if ($errors->has('postalcode'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('postalcode') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>



                                <label for="notes" class="col-sm-1 control-label">notes</label>
                                <div class="col-sm-11 {{ $errors->has('notes') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <textarea name="notes" class="form-control" placeholder="notes" id="editor1">{{ old('notes') }}</textarea>
                                        @if ($errors->has('notes'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('notes') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">


                                <label for="photo" class="col-sm-1 control-label">All Photos</label>
                                <div class="col-sm-5 {{ $errors->has('img') ? ' has-error' : '' }}">
                                    <input type="file" name="img[]" id="img" class="form-control" multiple>
                                    @if ($errors->has('img'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('img') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>

                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info center-block">Save <i class="fa fa-save" style="margin-left: 5px"></i></button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
                <!-- general form elements disabled -->

                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('css')

@endsection

@section('js')
    <script src="{{ asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>

@endsection