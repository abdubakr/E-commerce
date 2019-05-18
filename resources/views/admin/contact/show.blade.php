@extends('admin.layouts.master')
@section('title') {{trans('admin.create',['name'=> trans('admin.contact')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.create',['name'=> trans('admin.contact')])}}</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <table id="data-get" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th> {{trans('admin.id')}}</th>
                            <td>{{$contact->id}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.name')}}</th>
                            <td>{{$contact->name}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.email')}}</th>
                            <td>{{$contact->email}}</td>
                        </tr>

                        <tr>
                            <th> {{trans('admin.phone')}}</th>
                            <td>{{$contact->phone}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.subject')}}</th>
                            <td>{{$contact->subject}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.message')}}</th>
                            <td>{{$contact->message}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.sent_at')}}</th>
                            <td>{{$contact->created_at}}</td>
                        </tr>
                        <tr>
                            <th> {{trans('admin.action')}}</th>
                            <td>{!! deleteBtn(route('contact.delete', $contact->id)) !!}</td>
                        </tr>
                        </thead>

                    </table>

                </div>
            </div>
            <!-- /.box -->

        </div>

    </div>
@endsection
