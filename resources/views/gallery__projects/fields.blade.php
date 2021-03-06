<!-- Projects Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projects_id', 'Projects Id:') !!}
    {!! Form::text('projects_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_url', 'Img Url:') !!}
    {!! Form::file('img_url') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('galleryProjects.index') !!}" class="btn btn-default">Cancel</a>
</div>
