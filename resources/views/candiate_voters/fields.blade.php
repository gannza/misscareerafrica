<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Candiateid Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('canidate_id', $id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Vote now', ['class' => 'btn btn-primary']) !!}
    <a href="/selected-candidates" class="btn btn-default">Cancel</a>
</div>
