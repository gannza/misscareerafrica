<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Organization Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organization', 'Organization:') !!}
    {!! Form::text('organization', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_name', 'Event Name:') !!}
    {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_date', 'Event Date:') !!}
    {!! Form::date('event_date', null, ['class' => 'form-control','id'=>'event_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#event_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Venue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venue', 'Venue:') !!}
    {!! Form::text('venue', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @if(Auth::check())
    <a href="{!! route('bookings.index') !!}" class="btn btn-default">Cancel</a>
    @endif
</div>
