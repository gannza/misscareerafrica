<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $booking->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $booking->name !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $booking->phone !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $booking->email !!}</p>
</div>

<!-- Organization Field -->
<div class="form-group">
    {!! Form::label('organization', 'Organization:') !!}
    <p>{!! $booking->organization !!}</p>
</div>

<!-- Event Name Field -->
<div class="form-group">
    {!! Form::label('event_name', 'Event Name:') !!}
    <p>{!! $booking->event_name !!}</p>
</div>

<!-- Event Date Field -->
<div class="form-group">
    {!! Form::label('event_date', 'Event Date:') !!}
    <p>{!! $booking->event_date !!}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', 'Location:') !!}
    <p>{!! $booking->location !!}</p>
</div>

<!-- Venue Field -->
<div class="form-group">
    {!! Form::label('venue', 'Venue:') !!}
    <p>{!! $booking->venue !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $booking->description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $booking->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $booking->updated_at !!}</p>
</div>

