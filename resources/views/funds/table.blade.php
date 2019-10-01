<div class="table-responsive">
    <table class="table" id="funds-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Tell us your Background</th>
        <th>Tell us your Financial Status/Family status</th>
        <th>Tell us your Career Background</th>
        <th>Attach your business plan (PDF)</th>

        <th>Why Should we give you Capital Fund</th>
        <th>How will this fund transform your life</th>
        <th>How Will You Make Profit</th>
        <th>Competitive Advantage</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($funds as $fund)
            <tr>
                <td>{!! $fund->id !!}</td>
            <td>{!! $fund->full_name !!}</td>
            <td>{!! $fund->email !!}</td>
            <td>{!! $fund->phone_number !!}</td>
            <td>{!! $fund->background !!}</td>
            <td>{!! $fund->financial_status !!}</td>
            <td>{!! $fund->career_background !!}</td>
            <td>{!! $fund->attachement !!}</td>
            <td>{!! $fund->why_give_capital !!}</td>
            <td>{!! $fund->how_capital_transform_life !!}</td>
            <td>{!! $fund->how_will_you_make_profit !!}</td>
            <td>{!! $fund->comptentitive_advantage !!}</td>
                <td>
                    {!! Form::open(['route' => ['funds.destroy', $fund->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('funds.show', [$fund->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('funds.edit', [$fund->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
