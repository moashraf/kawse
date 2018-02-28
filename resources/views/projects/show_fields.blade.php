<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $projects->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $projects->title !!}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{!! $projects->body !!}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{!! $projects->photo !!}</p>
</div>

<!-- Gallery Field -->
<div class="form-group">
    {!! Form::label('gallery', 'Gallery:') !!}
    <p>{!! $projects->gallery !!}</p>
</div>

<!-- Cat Field -->
<div class="form-group">
    {!! Form::label('cat', 'Cat:') !!}
    <p>{!! $projects->cat !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $projects->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $projects->updated_at !!}</p>
</div>

