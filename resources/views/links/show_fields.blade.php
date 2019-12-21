<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $links->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $links->title !!}</p>
</div>

<!-- Contents Field -->
<div class="form-group">
    {!! Form::label('contents', 'Contents:') !!}
    <p>{!! $links->contents !!}</p>
</div>

<!-- Links Field -->
<div class="form-group">
    {!! Form::label('links', 'Links:') !!}
    <p>{!! $links->links_html !!}</p>
</div>

<!-- Linktype Field -->
<div class="form-group">
    {!! Form::label('linkType', 'Linktype:') !!}
    <p>{!! $links->linkType !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $links->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $links->updated_at !!}</p>
</div>

