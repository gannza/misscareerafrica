<div class="table-responsive">
    <table class="table" id="bookings-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Organization</th>
        <th>Event Name</th>
        <th>Event Date</th>
        <th>Location</th>
        <th>Venue</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{!! $booking->name !!}</td>
            <td>{!! $booking->phone !!}</td>
            <td>{!! $booking->email !!}</td>
            <td>{!! $booking->organization !!}</td>
            <td>{!! $booking->event_name !!}</td>
            <td>{!! $booking->event_date !!}</td>
            <td>{!! $booking->location !!}</td>
            <td>{!! $booking->venue !!}</td>
            <td>{!! $booking->description !!}</td>
                <td>
                    {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('bookings.show', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('bookings.edit', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
