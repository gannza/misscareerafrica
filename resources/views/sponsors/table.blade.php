<div class="table-responsive">
    <table class="table" id="sponsors-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Fname</th>
        <th>Lname</th>
        <th>Em Ail</th>
        <th>Phone Number</th>
        <th>Street</th>
        <th>City</th>
        <th>Province</th>
        <th>Areas</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sponsors as $sponsor)
            <tr>
                <td>{!! $sponsor->id !!}</td>
            <td>{!! $sponsor->fname !!}</td>
            <td>{!! $sponsor->lname !!}</td>
            <td>{!! $sponsor->email !!}</td>
            <td>{!! $sponsor->phone_number !!}</td>
            <td>{!! $sponsor->street !!}</td>
            <td>{!! $sponsor->city !!}</td>
            <td>{!! $sponsor->province !!}</td>
            <td>{!! $sponsor->areas !!}</td>
                <td>
                    {!! Form::open(['route' => ['sponsors.destroy', $sponsor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('sponsors.show', [$sponsor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('sponsors.edit', [$sponsor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
