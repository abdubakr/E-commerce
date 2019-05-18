@extends('admin.layouts.master')
@section('title') {{trans('admin.menu')}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('admin.menu') }} | <a href="{{route('menu.create')}}">{{trans('admin.create',['name'=>trans('admin.menu')])}}</a></h3>
                </div>


                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="data-get" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>{{trans('admin.id')}}</th>
                                    <th>{{trans('admin.title')}}</th>
                                    <th>{{trans('admin.links')}}</th>
                                    <th>{{trans('admin.action')}} </th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>{{trans('admin.id')}}</th>
                                    <th>{{trans('admin.title')}}</th>
                                    <th>{{trans('admin.links')}}</th>
                                    <th>{{trans('admin.action')}} </th>
                                </tr>
                                </tfoot>
                            </table>

                        <!-- /.box-body -->


                </div>
            </div>
            <!-- /.box -->

        </div>

    </div>
@endsection
@section('script')
    <script>
        $(function () {

            $('#data-get').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                "processing": true,
                "serverSide": true,
                "ajax": "{{route('admin.menu.data')}}",
                "columns": [
                    { "data": "id", "name" : "id" },
                    { "data": "title","name":"title" },
                    { "data": "links","name":"links" },
                    { "data": "action","name":"" },

                ]
            });
        });
    </script>
@endsection
