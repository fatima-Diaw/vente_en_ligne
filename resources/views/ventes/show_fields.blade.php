<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $vente->client_id }}</p>
</div>

<!-- Produit Id Field -->
<div class="form-group">
    {!! Form::label('produit_id', 'Produit Id:') !!}
    <p>{{ $vente->produit_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $vente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $vente->updated_at }}</p>
</div>

