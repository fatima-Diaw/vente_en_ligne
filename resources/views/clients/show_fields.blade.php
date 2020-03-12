<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $client->nom }}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{{ $client->adresse }}</p>
</div>

<!-- Telephone Field -->
<div class="form-group">
    {!! Form::label('telephone', 'Telephone:') !!}
    <p>{{ $client->telephone }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $client->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $client->updated_at }}</p>
</div>

