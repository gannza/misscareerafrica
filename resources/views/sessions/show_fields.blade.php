<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $session->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $session->title !!}</p>
</div>

<!-- Session Field -->
<div class="form-group">
    {!! Form::label('session', 'Session:') !!}
    <p>{!! $session->session !!}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{!! $session->country !!}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{!! $session->date !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{!! $session->image !!}</p>
</div>

<!-- Numbering Field -->
<div class="form-group">
    {!! Form::label('numbering', 'Numbering:') !!}
    <p>{!! $session->numbering !!}</p>
</div>

<!-- Is Current Applying Field -->
<div class="form-group">
    {!! Form::label('is_current_applying', 'Can Candidate Apply?') !!}
    <p>{!! $session->is_current_applying?'<label class="badge badge-success">YES</label>':'<label class="badge badge-danger">NO</label>' !!}</p>
</div>

<div class="form-group">
    {!! Form::label('is_voting_open', 'Can Candidate Voting?') !!}
    <p>{!! $session->is_voting_open?'<label class="badge badge-success">YES</label>':'<label class="badge badge-danger">NO</label>' !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $session->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $session->updated_at !!}</p>
</div>

