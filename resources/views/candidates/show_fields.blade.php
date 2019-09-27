<!-- Id Field -->
<div class="row">
    <div class="col-md-6">
        <div class="col-md-12">
            <hr />
            <b>Personal Info</b>
            <hr />
        </div>
        <div class="form-group">

            <p> {!! Form::label('id', 'Id:') !!}: {!! $candidate->id !!}</p>
        </div>

        <!-- Fname Field -->
        <div class="form-group">

            <p> {!! Form::label('fname', 'First name:') !!}: {!! $candidate->fname !!}</p>
        </div>

        <!-- Lname Field -->
        <div class="form-group">

            <p> {!! Form::label('lname', 'Last name:') !!}: {!! $candidate->lname !!}</p>
        </div>

        <!-- Email Field -->
        <div class="form-group">

            <p> {!! Form::label('email', 'Email:') !!} : {!! $candidate->email !!}</p>
        </div>

        <!-- Dob Field -->
        <div class="form-group">

            <p> {!! Form::label('dob', 'Dob:') !!}: {!! $candidate->dob !!}</p>
        </div>

        <!-- Phone Code Field -->
        <div class="form-group">

            <p> {!! Form::label('phone_code', 'Phone Code:') !!}: {!! $candidate->phone_code !!}</p>
        </div>

        <!-- Phone Number Field -->
        <div class="form-group">

            <p> {!! Form::label('phone_number', 'Phone Number:') !!}: {!! $candidate->phone_number !!}</p>
        </div>

        <!-- Street Field -->
        <div class="form-group">

            <p> {!! Form::label('street', 'Street:') !!}: {!! $candidate->street !!}</p>
        </div>

        <!-- City Field -->
        <div class="form-group">

            <p> {!! Form::label('city', 'City:') !!}: {!! $candidate->city !!}</p>
        </div>

        <!-- Province Field -->
        <div class="form-group">

            <p>{!! Form::label('province', 'Province:') !!}: {!! $candidate->province !!}</p>
        </div>

        <!-- Country Field -->
        <div class="form-group">

            <p> {!! Form::label('country', 'Country:') !!}: {!! $candidate->country !!}</p>
        </div>

        <!-- Level Education Field -->
        <div class="form-group">

            <p> {!! Form::label('level_education', 'Level of education:') !!}: {!! $candidate->level_education !!}</p>
        </div>

        <!-- Former School Attended Field -->
        <div class="form-group">

            <p> {!! Form::label('former_school_attended', 'Former School Attended:') !!}: {!!
                $candidate->former_school_attended !!}</p>
        </div>

        <!-- Education Background Field -->
        <div class="form-group">
            {!! Form::label('education_background', 'Briefly describe your education background (500 Max)') !!}
            <p>{!! $candidate->education_background !!}</p>
        </div>

        <!-- Current Occupation Field -->
        <div class="form-group">
            {!! Form::label('current_occupation', 'Current Occupation') !!}
            <p>{!! $candidate->current_occupation !!}</p>
        </div>
    </div>
    <div class="col-md-6">


        <div class="col-md-12">
            <hr />
            <b>MISS CAREER AFRICA COMPETITION SECTION</b>
            <hr />
        </div>
        <!-- Q1 Field -->
        <div class="form-group">
            {!! Form::label('q1', 'Q1. Tell us about yourself? (500 Max)') !!}
            <p style="margin-left:30px">{!! $candidate->q1 !!}</p>
        </div>

        <!-- Q2 Field -->
        <div class="form-group">
            {!! Form::label('q2', 'Q2. What is your next five years career plans? (500 Max)') !!}
            <p style="margin-left:30px">{!! $candidate->q2 !!}</p>
        </div>

        <!-- Q3 Field -->
        <div class="form-group">
            {!! Form::label('q3', 'Q3. What is your project name?') !!}
            <p style="margin-left:30px">{!! $candidate->q3 !!}</p>
        </div>

        <!-- Q4 Field -->
        <div class="form-group">
            {!! Form::label('q4', 'Q4. Describe your project? (500 Max)') !!}
            <p style="margin-left:30px">{!! $candidate->q4 !!}</p>
        </div>

        <!-- Q5 Field -->
        <div class="form-group">
            {!! Form::label('q5', 'Q5. How will you use the title to influence your community and africa at large once
            crowned Miss Career Africa? (500 Max)') !!}
            <p style="margin-left:30px">{!! $candidate->q5 !!}</p>
        </div>

        <!-- Q6 Field -->
        <div class="form-group">
            {!! Form::label('q6', 'Q6. Tell us why you deserve to be crowned Miss Career Africa? (500 Max)') !!}
            <p>{!! $candidate->q6 !!}</p>
        </div>

        <!-- Q7 Field -->
        <div class="form-group">
            {!! Form::label('q7', 'Q7. Briefly describe your recent career achievements you are proud of? (500 Max)')
            !!}
            <p style="margin-left:30px">{!! $candidate->q7 !!}</p>
        </div>



    </div>

    <div class="col-md-8">
        <hr />
        <!-- Session Id Field -->
        <div class="form-group">
           
            <p> {!! Form::label('session_id', 'Session Id:') !!}: {!! $candidate->session_id !!}</p>
        </div>

        <!-- Votes Field -->
        <div class="form-group">
           
            <p> {!! Form::label('votes', 'Votes:') !!}: {!! $candidate->votes !!}</p>
        </div>

        <!-- Is Selected Field -->
        <div class="form-group">
           
            <p> {!! Form::label('is_selected', 'Is Candidate Selected:') !!}: {!! $candidate->is_selected?'<label class="badge badge-success">YES</label>':'<label
                    class="badge badge-danger">NO</label>' !!}</p>
        </div>
    </div>
    <div class="col-md-4">
        <hr />
        <!-- Created At Field -->
        <div class="form-group">
           
            <p> {!! Form::label('created_at', 'Created At:') !!}:{!! $candidate->created_at !!}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group">
           
            <p> {!! Form::label('updated_at', 'Updated At:') !!}: {!! $candidate->updated_at !!}</p>
        </div>
    </div>
</div>
