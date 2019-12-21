<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Contents Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contents', 'Contents:') !!}
    {!! Form::textarea('contents', null, ['class' => 'form-control']) !!}
</div>

<!-- Links Field -->
<div class="form-group col-sm-6">
    {!! Form::label('links', 'Links:') !!}
    {!! Form::text('links', null, ['class' => 'form-control']) !!}
</div>

<!-- Linktype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linkType', 'Linktype:') !!}
    {!! Form::select('linkType', ['youtube' => 'youtube','link' => 'link'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('links.index') !!}" class="btn btn-default">Cancel</a>
</div>
