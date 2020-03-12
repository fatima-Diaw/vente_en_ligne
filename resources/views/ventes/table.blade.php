<div class="table-responsive">
    <table class="table" id="ventes-table">
        <thead>
            <tr>
                <th>Client Id</th>
        <th>Produit Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventes as $vente)
            <tr>
                <td>{{ $vente->client_id }}</td>
            <td>{{ $vente->produit_id }}</td>
                <td>
                    {!! Form::open(['route' => ['ventes.destroy', $vente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ventes.show', [$vente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ventes.edit', [$vente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
