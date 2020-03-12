<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Qte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qte', 'Qte:') !!}
    {!! Form::text('qte', null, ['class' => 'form-control']) !!}
</div>


<!-- Emplacement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emplacement', 'Emplacement:') !!}
    {!! Form::text('emplacement', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('price', 'price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('categorie_id', 'Categorie:') !!}
    {!! Form::select('categorie_id', $categories->pluck('nom'),['class' => 'form-control']) !!}
                      
</div>
<div class="form-group col-sm-12">
  {!! Form::label('image', 'image:') !!} 
  {!! Form::file('image', null, ['class' => 'form-control']) !!} 
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produits.index') }}" class="btn btn-default">Cancel</a>
</div>
