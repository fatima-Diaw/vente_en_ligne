  

    <div class="flex-center position-ref full-height bg2">
            
    </div>
   

<section class="section1">
    <div class="titre">
             <h1> Shoppez la tendance</h1>
          </div>
    <div class="container">
        <div class="row">
            @foreach($produits as $produit)
            <div class="col-lg-4">
               <div class="image">
                 <a href="{{ route('produits.show', [$produit->id]) }}">
                   <img src="{{ URL::to('/') }}/images/{{ $produit->image}}" style="width: 100%">
                  </a>
                  <div class="content1">
                    <p>{{ $produit->nom }}</p>
                      <p>{{$produit->price}} frcfa</p>
                  
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>




