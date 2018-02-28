<table class="table table-responsive" id="reviews-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Job</th>
        <th>Body</th>
        <th>Photo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reviews as $reviews)
        <tr>
            <td>{!! $reviews->name !!}</td>
            <td>{!! $reviews->job !!}</td>
            <td>{!! $reviews->body !!}</td>
            <td>{!! $reviews->photo !!}</td>
            <td>
                {!! Form::open(['route' => ['reviews.destroy', $reviews->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('reviews.show', [$reviews->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('reviews.edit', [$reviews->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>