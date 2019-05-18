@extends('admin.layouts.master')
@section('title') {{trans('admin.create',['name'=> trans('admin.user')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.create',['name'=> trans('admin.user')])}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($user,[
                        'route'     => ['user.update',$user->id],
                        'method'  =>  'PATCH',
                        'role'    =>   'form'
                ]) !!}
                <div class="box-body">
                    @include('admin.user.form')

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                    </div>
                    {!! Form::close() !!}
                    <hr>
                    <h3>{{trans('admin.editPass')}}</h3>
                    {!! Form::open([
                   'url'     => route('user.update',$user->id),
                   'method'  =>  'PATCH',
                   'role'    =>   'form'
              ])
            !!}
                    <div class="form-group">
                        <label for="{{trans('admin.password')}}">{{trans('admin.password')}}</label>
                        {!! Form::password("password", [
                                'class' => 'form-control',
                                'placeholder' =>  trans('admin.password') ,
                                'requierd'

                        ]) !!}

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                    </div>
                    {!! Form::close() !!}
                    <hr>
                </div>
            </div>
            <!-- /.box -->

        </div>

    </div>
@endsection
