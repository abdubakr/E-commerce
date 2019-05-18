@extends('admin.layouts.master')
@section('title') {{trans('admin.setting')}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('admin.setting') }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open([
                        'url'     => route('setting.update'),
                        'method'  =>  'post',
                        'role'    =>   'form'
                ]) !!}
                <div class="box-body">
                    @foreach($setting as $set)
                        <div class="form-group">
                            <label for="{{ $set->name }}">{{ $set->title }}</label>
                            @if($set->type == 'text')
                                {!! Form::text($set->name, $set->value, [
                                        'class' => 'form-control',
                                        'placeholder' => $set->title
                                ]) !!}
                            @elseif($set->type == 'textarea')
                                {!! Form::textarea($set->name, $set->value, [
                                'class' => 'form-control',
                                'placeholder' => $set->title
                        ]) !!}
                            @else
                                {!! Form::select($set->name, $set->options,$set->value, [
                                   'class' => 'form-control',
                        ]) !!}
                            @endif
                        </div>
                    @endforeach

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
