<table class="table table-responsive" id="projects-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Body</th>
        <th>Photo</th>
        <th>Gallery</th>
        <th>Cat</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($projects as $projects)
        <tr>
            <td>{!! $projects->title !!}</td>
            <td>{!! $projects->body !!}</td>
            <td>{!! $projects->photo !!}</td>
            <td>{!! $projects->gallery !!}</td>
            <td>{!! $projects->cat !!}</td>
            <td>
                {!! Form::open(['route' => ['projects.destroy', $projects->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('projects.show', [$projects->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('projects.edit', [$projects->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>