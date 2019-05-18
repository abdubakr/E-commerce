<div class="form-group">
    <label for="{{trans('admin.title')}}">{{trans('admin.title')}}</label>
    {!! Form::text("title", null, [
            'class' => 'form-control',
            'placeholder' =>  trans('admin.title') ,
            'requierd'

    ]) !!}
    @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <label for="{{trans('admin.image')}}">{{trans('admin.image')}}</label>
    {!! Form::file("image",role() ,null, [
            'class' => 'form-control',

    ]) !!}

</div>





