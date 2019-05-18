<div class="form-group">
    <label for="{{trans('admin.title')}}">{{trans('admin.title')}}</label>
    {!! Form::text("name", null, [
            'class' => 'form-control',
            'placeholder' =>  trans('admin.title') ,
            'requierd'

    ]) !!}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name ') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    <label for="{{trans('admin.content')}}">{{trans('admin.content')}}</label>
    {!! Form::textarea("details", null, [
            'class' => 'form-control ckeditor',
            'placeholder' =>  trans('admin.content') ,
            'requierd'

    ]) !!}
    @if ($errors->has('details'))
        <span class="help-block">
            <strong>{{ $errors->first('details') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    <label for="{{trans('admin.seo_desc')}}">{{trans('admin.seo_desc')}}</label>
    {!! Form::textarea("seo_desc", null, [
            'class' => 'form-control',
            'placeholder' =>  trans('admin.seo_desc') ,
            'requierd'

    ]) !!}
    @if ($errors->has('seo_desc'))
        <span class="help-block">
            <strong>{{ $errors->first('seo_desc') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    <label for="{{trans('admin.seo_keys')}}">{{trans('admin.seo_keys')}}</label>
    {!! Form::textarea("seo_keys", null, [
            'class' => 'form-control',
            'placeholder' =>  trans('admin.seo_keys') ,
            'requierd'

    ]) !!}
    @if ($errors->has('seo_keys'))
        <span class="help-block">
            <strong>{{ $errors->first('seo_keys') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    <label for="{{trans('admin.image')}}">{{trans('admin.image')}}</label>
    {!! Form::file("image",role() ,null, [
            'class' => 'form-control',

    ]) !!}
    @if ($errors->has('image'))
        <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
    @endif
</div>
<div class="form-group">
    <label for="{{trans('admin.category_id')}}">{{trans('admin.category')}}</label>
    {!! Form::select("category_id", $cats,null, [
            'class' => 'form-control',
            'requierd'

    ]) !!}
    @if ($errors->has('category_id'))
        <span class="help-block">
                <strong>{{ $errors->first('category_id') }}</strong>
            </span>
    @endif
</div>
<div class="form-group">
    <label for="{{trans('admin.brand_id')}}">{{trans('admin.brand')}}</label>
    {!! Form::select("brand_id", $brands,null, [
            'class' => 'form-control',
            'requierd'

    ]) !!}
    @if ($errors->has('brand_id'))
        <span class="help-block">
                <strong>{{ $errors->first('brand_id') }}</strong>
            </span>
    @endif
</div>





