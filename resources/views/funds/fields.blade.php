
<!-- Full Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Background Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('background', 'Background:') !!}
    {!! Form::textarea('background', null, ['class' => 'form-control']) !!}
</div>

<!-- Financial Status Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('financial_status', 'Financial Status:') !!}
    {!! Form::textarea('financial_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Career Background Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('career_background', 'Career Background:') !!}
    {!! Form::textarea('career_background', null, ['class' => 'form-control']) !!}
</div>

<!-- Attachement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachement', 'Attachement:') !!}
    {!! Form::file('attachement') !!}
</div>
<div class="clearfix"></div>

<!-- Why Give Capital Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('why_give_capital', 'Why Should we give Capital Fund:') !!}
    {!! Form::textarea('why_give_capital', null, ['class' => 'form-control']) !!}
</div>

<!-- How Capital Transform Life Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('how_capital_transform_life', 'How Capital Transform Life:') !!}
    {!! Form::textarea('how_capital_transform_life', null, ['class' => 'form-control']) !!}
</div>

<!-- How Will You Make Profit Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('how_will_you_make_profit', 'How Will You Make Profit:') !!}
    {!! Form::textarea('how_will_you_make_profit', null, ['class' => 'form-control']) !!}
</div>

<!-- Comptentitive Advantage Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comptentitive_advantage', 'Comptentitive Advantage:') !!}
    {!! Form::textarea('comptentitive_advantage', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('funds.index') !!}" class="btn btn-default">Cancel</a>
</div>
