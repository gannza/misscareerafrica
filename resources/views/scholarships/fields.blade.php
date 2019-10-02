<!-- Fname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fname', 'Fname:') !!}
    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
</div>

<!-- Lname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lname', 'Lname:') !!}
    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Birth Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birth_date', 'Birth Date:') !!}
    {!! Form::date('birth_date', null, ['class' => 'form-control','id'=>'birth_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#birth_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Phone Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_code', 'Phone Code:') !!}
    {!! Form::text('phone_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Residence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('residence', 'Residence:') !!}
    {!! Form::text('residence', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::select('gender', ['Male' => 'Male'], null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- National Id Or Passport Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('national_ID_or_Passport_ID', 'National Id Or Passport Id:') !!}
    {!! Form::text('national_ID_or_Passport_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Parents Or Guardian Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parents_or_guardian_name', 'Parents Or Guardian Name:') !!}
    {!! Form::text('parents_or_guardian_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Parents Guardian Contacts Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parents_guardian_contacts', 'Parents Guardian Contacts:') !!}
    {!! Form::text('parents_guardian_contacts', null, ['class' => 'form-control']) !!}
</div>

<!-- Q1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q1', 'Q1:') !!}
    {!! Form::textarea('q1', null, ['class' => 'form-control']) !!}
</div>

<!-- Q2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q2', 'Q2:') !!}
    {!! Form::textarea('q2', null, ['class' => 'form-control']) !!}
</div>

<!-- Q3 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q3', 'Q3:') !!}
    {!! Form::textarea('q3', null, ['class' => 'form-control']) !!}
</div>

<!-- Q4 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q4', 'Q4:') !!}
    {!! Form::textarea('q4', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch I Agree Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('i_agree', 'I Agree:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('i_agree', 0) !!}
        {!! Form::checkbox('i_agree', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('scholarships.index') !!}" class="btn btn-default">Cancel</a>
</div>
