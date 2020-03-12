<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('produits*') ? 'active' : '' }}">
    <a href="{{ route('produits.index') }}"><i class="fa fa-edit"></i><span>Produits</span></a>
</li>

<li class="{{ Request::is('ventes*') ? 'active' : '' }}">
    <a href="{{ route('ventes.index') }}"><i class="fa fa-edit"></i><span>Ventes</span></a>
</li>



