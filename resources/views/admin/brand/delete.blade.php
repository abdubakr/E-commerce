@extends('admin.layouts.master')
@section('title') {{trans('admin.delete',['name'=> trans('admin.brand')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.delete',['name'=> trans('admin.brand')])}}</h3>
                </div>

                <div class="box-body">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                {{ trans('admin.del',['name'=>$brand->title]) }}
                            </div>
                                <div class="panel-body">
                                    <p>{{trans('admin.delMsg')}}</p>
                                    {!!
                                     Form::open([
                                     'url'      => route('brand.destroy',$brand->id),
                                     'method'   => 'DELETE'
                                     ])
                                     !!}
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">{{ trans('admin.yes') }}</button>
                                        <a href="{{  route('brand.index') }}"
                                           class="btn btn-default">{{ trans('admin.cancel') }}</a>
                                    </div>
                                    {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->

        </div>

    </div>
@endsection
