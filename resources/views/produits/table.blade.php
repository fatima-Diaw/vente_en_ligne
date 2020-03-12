<div class="table-responsive">
    <table class="table" id="produits-table">
        <thead>
            <tr>
        <th width="14%">Nom</th>
        <th width="14%">Description</th>
        <th width="14%">Qte</th>
        <th width="14%">Emplacement</th>
        <th width="14%">prix</th>
        <th width="14%">Categorie Id</th>
        <th width="17%">image</th>

      

                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produits as $produit)
            <tr>
                <td>{{ $produit->nom }}</td>
            <td>{{ $produit->description }}</td>
            <td>{{ $produit->qte }}</td>
            <td>{{ $produit->emplacement }}</td>
            <td>{{ $produit->price }}</td>
            <td>
         @foreach($categories as $categorie)
            @if( $categorie->id == $produit->categorie_id)
                {{ $categorie->nom }}
            @endif
        @endforeach
            </td>
            <td><img src="{{ URL::to('/') }}/images/{{ $produit->image}}" height="50" width="50"></td>
           
            
                <td>
                    {!! Form::open(['route' => ['produits.destroy', $produit->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('produits.show', [$produit->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('produits.edit', [$produit->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
