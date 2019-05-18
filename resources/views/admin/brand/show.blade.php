@extends('admin.layouts.master')
@section('title') {{trans('admin.show',['name'=> trans('admin.brand')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.show',['name'=> trans('admin.brand')])}}</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <table id="data-get" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th> {{trans('admin.id')}}</th>
                            <td>{{$brand->id}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.name')}}</th>
                            <td>{{$brand->name}}</td>
                        </tr>
                         @if($brand->image != null)
                        <tr>
                            <th> {{trans('admin.image')}}</th>
                            <td><img src="{{ $brand->photo}}" style="width: 150px; height:150px;"></td>
                        </tr>
                        @endif
                        <tr>
                            <th> {{trans('admin.status')}}</th>
                            <td>{!! showStatus($brand->status) !!}</td>
                        </tr>


                        <tr>
                            <th> {{trans('admin.action')}}</th>
                            <td>{!! editBtn(route('brand.edit', $brand->id)) . ' ' .deleteBtn(route('brand.delete', $brand->id)) !!}</td>
                        </tr>
                        </thead>

                    </table>

                </div>
            </div>
            <!-- /.box -->

        </div>

    </div>
@endsection
