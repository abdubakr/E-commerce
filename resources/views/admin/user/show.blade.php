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

                <div class="box-body">
                    <table id="data-get" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th> {{trans('admin.id')}}</th>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.name')}}</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.email')}}</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.action')}}</th>
                            <td>{!! editBtn(route('user.edit', $user->id)) . ' ' .deleteBtn(route('user.delete', $user->id)) !!}</td>
                        </tr>
                        </thead>

                    </table>

                </div>
            </div>
            <!-- /.box -->

        </div>

    </div>
@endsection
