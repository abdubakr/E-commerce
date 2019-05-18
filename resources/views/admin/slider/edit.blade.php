@extends('admin.layouts.master')
@section('title') {{trans('admin.update',['name'=> trans('admin.slider')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.update',['name'=> trans('admin.slider')])}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($slider,[
                        'route'     => ['slider.update',$slider->id],
                        'method'  =>  'PATCH',
                        'role'    =>   'form',
                        'files'   =>    true
                ]) !!}
                <input type="hidden" name="id" value="{{$slider->id}}">
                <div class="box-body">
                    @include('admin.slider.form')

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
