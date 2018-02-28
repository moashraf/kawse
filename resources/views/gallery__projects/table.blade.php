<table class="table table-responsive" id="galleryProjects-table">
    <thead>
        <tr>
            <th>Projects Id</th>
        <th>Img Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($galleryProjects as $galleryProject)
        <tr>
            <td>{!! $galleryProject->projects_id !!}</td>
            <td>{!! $galleryProject->img_url !!}</td>
            <td>
                {!! Form::open(['route' => ['galleryProjects.destroy', $galleryProject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('galleryProjects.show', [$galleryProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('galleryProjects.edit', [$galleryProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>