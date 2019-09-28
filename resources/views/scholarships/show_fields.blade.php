<!-- Id Field -->
<div class="form-group">
   
    <p> {!! Form::label('id', 'Id:') !!}: {!! $scholarship->id !!}</p>
</div>

<!-- Fname Field -->
<div class="form-group">
    
    <p>{!! Form::label('fname', 'Fname:') !!}: {!! $scholarship->fname !!}</p>
</div>

<!-- Lname Field -->
<div class="form-group">
   
    <p> {!! Form::label('lname', 'Lname:') !!}: {!! $scholarship->lname !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
   
    <p> {!! Form::label('email', 'Email:') !!}: {!! $scholarship->email !!}</p>
</div>

<!-- Birth Date Field -->
<div class="form-group">
   
    <p> {!! Form::label('birth_date', 'Birth Date:') !!}: {!! $scholarship->birth_date !!}</p>
</div>

<!-- Phone Code Field -->
<div class="form-group">
    
    <p>{!! Form::label('phone_code', 'Phone Code:') !!}: {!! $scholarship->phone_code !!}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
   
    <p> {!! Form::label('phone_number', 'Phone Number:') !!}: {!! $scholarship->phone_number !!}</p>
</div>

<!-- Residence Field -->
<div class="form-group">
    
    <p>{!! Form::label('residence', 'Residence:') !!}: {!! $scholarship->residence !!}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    
    <p>{!! Form::label('gender', 'Gender:') !!}: {!! $scholarship->gender !!}</p>
</div>

<!-- Nationality Field -->
<div class="form-group">
   
    <p> {!! Form::label('nationality', 'Nationality:') !!}: {!! $scholarship->nationality !!}</p>
</div>

<!-- National Id Or Passport Id Field -->
<div class="form-group">
   
    <p> {!! Form::label('national_ID_or_Passport_ID', 'National Id Or Passport Id:') !!}: {!! $scholarship->national_ID_or_Passport_ID !!}</p>
</div>

<!-- Parents Or Guardian Name Field -->
<div class="form-group">
   
    <p> {!! Form::label('parents_or_guardian_name', 'Parents Or Guardian Name:') !!}: {!! $scholarship->parents_or_guardian_name !!}</p>
</div>

<!-- Parents Guardian Contacts Field -->
<div class="form-group">
   
    <p> {!! Form::label('parents_guardian_contacts', 'Parents Guardian Contacts:') !!}: {!! $scholarship->parents_guardian_contacts !!}</p>
</div>

<!-- Q1 Field -->
<div class="form-group">
    {!! Form::label('q1', 'Q1. Tell us about yourself ? (500 max):') !!}
    <p>{!! $scholarship->q1 !!}</p>
</div>

<!-- Q2 Field -->
<div class="form-group">
    {!! Form::label('q2', 'Q2. Why do you desire to have this Scholarship? (500 Max)') !!}
    <p>{!! $scholarship->q2 !!}</p>
</div>

<!-- Q3 Field -->
<div class="form-group">
    {!! Form::label('q3', 'Q3. Tell us about any challenge or obstacle you have dealt with and overcome in life and how it helped you or your society (500 max)') !!}
    <p>{!! $scholarship->q3 !!}</p>
</div>

<!-- Q4 Field -->
<div class="form-group">
    {!! Form::label('q4', 'Q4. If you stand a chance to win for this Scholarship, what are your future plans after its completion? (500 max)') !!}
    <p>{!! $scholarship->q4 !!}</p>
</div>

<!-- I Agree Field -->

<div class="form-group">
           
           <p> {!! Form::label('i_agree', 'I Agree:') !!}: {!! $scholarship->i_agree?'<label class="badge badge-success">YES</label>':'<label
                   class="badge badge-danger">NO</label>' !!}</p>
       </div>
<!-- Created At Field -->
<div class="form-group">
   
    <p> {!! Form::label('created_at', 'Created At:') !!}: {!! $scholarship->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
   
    <p> {!! Form::label('updated_at', 'Updated At:') !!}: {!! $scholarship->updated_at !!}</p>
</div>

