<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $produit->nom }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $produit->description }}</p>
</div>

<!-- Qte Field -->
<div class="form-group">
    {!! Form::label('qte', 'Qte:') !!}
    <p>{{ $produit->qte }}</p>
</div>

<!-- Emplacement Field -->
<div class="form-group">
    {!! Form::label('emplacement', 'Emplacement:') !!}
    <p>{{ $produit->emplacement }}</p>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('price', 'price:') !!}
    <p>{{ $produit->price }}</p>
</div>

<!-- Categorie Id Field -->
<div class="form-group">
    {!! Form::label('categorie_id', 'Categorie Id:') !!}
    <p>{{ $produit->categorie_id}}</p>
</div>
<div class="form-group col-sm-12">
  {!! Form::label('image', 'image:') !!} <br> 
  <img src="{{ URL::to('/') }}/images/{{ $produit->image}}" height="50" width="50">
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $produit->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at','Updated At:') !!}
    <p>{{ $produit->updated_at }}</p>
</div>

