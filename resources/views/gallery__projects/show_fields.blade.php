<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $galleryProject->id !!}</p>
</div>

<!-- Projects Id Field -->
<div class="form-group">
    {!! Form::label('projects_id', 'Projects Id:') !!}
    <p>{!! $galleryProject->projects_id !!}</p>
</div>

<!-- Img Url Field -->
<div class="form-group">
    {!! Form::label('img_url', 'Img Url:') !!}
    <p>{!! $galleryProject->img_url !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $galleryProject->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $galleryProject->updated_at !!}</p>
</div>

