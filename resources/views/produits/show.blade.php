@extends('layouts.master')

@section('content')
  
    <section>
    <div class="container pa">
        <div class="row">
            <div class="col-md-5 col-sx-12 order-lg-1">
              <div class="image">
                 <a href="#">
                   <img src="{{ URL::to('/') }}/images/{{ $produit->image}}" style="width: 100%">
                  </a>
                </div>
            </div>
            
            <div class="col-md-7 col-sx-12 order-lg-2 texte">
                <h3>{{ $produit->nom}}</h3>
                <p class="">Parce que vous n'en aurez jamais assez, Soyez avant-gardiste en vous procurant, dès maintenant, les nouveautés de la saison pour rester à la pointe de la mode </p>
                <div class="plp-cat-banners-cover">
                    <ul class="">
                        <li class="liste">
                            <a class="#">
                            {{ $produit->nom}}
                            </a>

                        <ul>    
                            <li class="liste">
                            <a class="#">
                            Modele: {{ $produit->description}}
                            </a>
                        </li>
                        <li class="liste">
              
                            <a class="#">
                                En stock : {{ $produit->qte}}
                            </a>
                        </li>
                        <li class="liste">
                            <a class="#">
                                Prix : {{ $produit->price}}
                            </a>
                        </li>
                    </ul>

                        </li>
                       
                    </ul>
                    <strong class="mb-auto font-weigh-normal text-secondary">{{ $produit->getPrice() }}</strong>
                    <div class="row">
                        <div class="col-md-7">
                            <form action="{{route('cart.store') }}" method="post">
                                 @csrf
                                <input type="hidden" name="produit_id" value="{{ $produit->id }}">

                                <button type="submit" class=" btn btn-dark"> ajouter au panier</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection

    
                    
