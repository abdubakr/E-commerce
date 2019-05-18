@extends('admin.layouts.master')
@section('title') {{trans('admin.create',['name'=> trans('admin.menu')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.create',['name'=> trans('admin.menu')])}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open([
                        'url'     => route('menu.store'),
                        'method'  =>   'post',
                        'role'    =>   'form',
                        'files'   =>    true
                ]) !!}
                <div class="box-body">
                    @include('admin.menu.form')

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /.box -->

        </div>

</div>
@endsection
