<div class="table-responsive">
    <table class="table" id="volunteers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Fname</th>
        <th>Lname</th>
        <th>Country</th>
        <th>Phone Number</th>
        <th>Street</th>
        <th>City</th>
        <th>Province</th>
        <th>Areas Of Help</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($volunteers as $volunteer)
            <tr>
                <td>{!! $volunteer->id !!}</td>
            <td>{!! $volunteer->fname !!}</td>
            <td>{!! $volunteer->lname !!}</td>
            <td>{!! $volunteer->country !!}</td>
            <td>{!! $volunteer->phone_number !!}</td>
            <td>{!! $volunteer->street !!}</td>
            <td>{!! $volunteer->city !!}</td>
            <td>{!! $volunteer->province !!}</td>
            <td>{!! $volunteer->areas_of_help !!}</td>
                <td>
                    {!! Form::open(['route' => ['volunteers.destroy', $volunteer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('volunteers.show', [$volunteer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('volunteers.edit', [$volunteer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
