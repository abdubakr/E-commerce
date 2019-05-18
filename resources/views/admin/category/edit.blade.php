@extends('admin.layouts.master')
@section('title') {{trans('admin.create',['name'=> trans('admin.category')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.create',['name'=> trans('admin.category')])}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($cat,[
                        'route'   =>   ['category.update', $cat->id],
                        'method'  =>   'PATCH',
                        'role'    =>   'form',
                        'files'   =>    true
                ]) !!}
                <input type="hidden" name="id" value="{{$cat->id}}">
                <div class="box-body">
                    @include('admin.category.form')

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
