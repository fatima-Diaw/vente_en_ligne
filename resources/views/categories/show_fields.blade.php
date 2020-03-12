<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $categorie->nom }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $categorie->description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $categorie->created_at }}</p>
</div>
<!--<div class="form-group col-sm-12">
  {!! Form::label('image', 'image:') !!} <br> 
  <img src="{{ URL::to('/') }}/images/{{ $produit->image}}" height="50" width="50">
</div>-->

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $categorie->updated_at }}</p>
</div>

