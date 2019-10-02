

<!-- Fname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fname', 'First name:') !!}
    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
</div>

<!-- Lname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Last name:') !!}
    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>

<!-- Em Ail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

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

<!-- Areas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('areas', 'Areas:') !!}
    {!! Form::select('areas', ['gold' => 'gold','silver'=>'silver','premium'=>'premium'], null, ['class' => 'form-control']) !!}
</div>
<!-- Comment Field -->
<div class="form-group col-sm-12">
    {!! Form::label('comment', 'comment:') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->

<div class="form-group col-sm-12">
    {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
    @if(Auth::check())
    <a href="{!! route('sponsors.index') !!}" class="btn btn-default">Cancel</a>
    @endif
</div>

