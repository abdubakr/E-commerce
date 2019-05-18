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
    <label for="{{trans('admin.links')}}">{{trans('admin.links')}}</label>
    {!! Form::text("links", null, [
            'class' => 'form-control',
            'placeholder' =>  trans('admin.links') ,
            'requierd'

    ]) !!}
    @if ($errors->has('links'))
        <span class="help-block">
            <strong>{{ $errors->first('links') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    <label for="{{trans('admin.parent_id')}}">{{trans('admin.parent_id')}}</label>
    {!! Form::select("parent_id", $menus,null, [
            'class' => 'form-control',
            'placeholder' =>  trans('admin.parent_id') ,
            'requierd'

    ]) !!}
    @if ($errors->has('parent_id'))
        <span class="help-block">
            <strong>{{ $errors->first('parent_id') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    <label for="{{trans('admin.status')}}">{{trans('admin.status')}}</label>
    {!! Form::select("status",status(),null, [
            'class' => 'form-control',
            'requierd'

    ]) !!}
    @if ($errors->has('status'))
        <span class="help-block">
            <strong>{{ $errors->first('status') }}</strong>
        </span>
    @endif
</div>







