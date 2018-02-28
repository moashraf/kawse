<table class="table table-responsive" id="catProjects-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Img Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($catProjects as $catProject)
        <tr>
            <td>{!! $catProject->title !!}</td>
            <td>{!! $catProject->img_url !!}</td>
            <td>
                {!! Form::open(['route' => ['catProjects.destroy', $catProject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catProjects.show', [$catProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catProjects.edit', [$catProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>