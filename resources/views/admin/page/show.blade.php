@extends('admin.layouts.master')
@section('title') {{trans('admin.create',['name'=> trans('admin.page')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.create',['name'=> trans('admin.page')])}}</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <table id="data-get" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th> {{trans('admin.id')}}</th>
                            <td>{{$page->title}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.name')}}</th>
                            <td>{{$page->slug}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.user')}}</th>
                            <td>{!!  $page->creator !!}</td>
                        </tr>
                        @if($page->image != null)
                        <tr>
                            <th> {{trans('admin.image')}}</th>
                            <td><img src="{{ $page->photo}}" style="width: 150px; height:150px;"></td>
                        </tr>
                        @endif
                        <tr>
                            <th> {{trans('admin.email')}}</th>
                            <td>{!!  $page->content !!}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.action')}}</th>
                            <td>{!! editBtn(route('page.edit', $page->id)) . ' ' .deleteBtn(route('page.delete', $page->id)) !!}</td>
                        </tr>
                        </thead>

                    </table>

                </div>
            </div>
            <!-- /.box -->

        </div>

    </div>
@endsection
