<!-- Id Field -->

<!-- Fname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fname', 'First name:') !!}
    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
</div>

<!-- Lname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lname', 'Last name:') !!}
    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>
<!-- <div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Street Field -->
<div class="form-group col-sm-6">
    {!! Form::label('street', 'Street:') !!}
    {!! Form::text('street', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province', 'Province:') !!}
    {!! Form::text('province', null, ['class' => 'form-control']) !!}
</div>

<!-- Areas Of Help Field -->
<div class="form-group col-sm-6">
    {!! Form::label('areas_of_help', 'Areas Of Help:') !!}
    {!! Form::select('areas_of_help', ['documentation' => 'documentation', 'fundrazing' => 'fundrazing', 'management' => 'management', 'mobilization' => 'mobilization', 'Team' => 'Team', 'Social Media' => 'Social Media'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    @if(Auth::check())
    <a href="{!! route('volunteers.index') !!}" class="btn btn-default">Cancel</a>
    @endif
</div>
