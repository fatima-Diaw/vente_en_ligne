<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproduitRequest;
use App\Http\Requests\UpdateproduitRequest;
use App\Repositories\produitRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\models\categorie;
use App\models\produit;

class produitController extends AppBaseController
{
    /** @var  produitRepository */
    private $produitRepository;

    public function __construct(produitRepository $produitRepo)
    {
        $this->produitRepository = $produitRepo;
    }

    /**
     * Display a listing of the produit.
     *
     * @param Request $request
     *
     * @return Response
     */
   /* public function index(Request $request)
    {
        $produits = $this->produitRepository->all();
         $categories = categorie::all();
        return view('produits.index',compact('categories','produits', $produits));
          
    }*/
    public function index($nom = null)
{
    $query = $nom ? categorie::whereNom($nom)->firstOrFail()->produits() : Produit::query();
    $produits = $query->withTrashed()->oldest('nom')->paginate(20);
    $categories = categorie::all();
    return view('produits.index', compact('produits', 'categories', 'nom'));
}
 public function article($nom = null)
{
    $query = $nom ? categorie::whereNom($nom)->firstOrFail()->produits() : Produit::query();
    $produits = $query->withTrashed()->oldest('nom')->paginate(20);
    $categories = categorie::all();
    return view('produits.article', compact('produits', 'categories', 'nom'));
}
 

    /**
     * Show the form for creating a new produit.
     *
     * @return Response
     */
    public function create()
    {
        $categories = categorie::all();
        return view('produits.create',compact('categories'));
    }

    /**
     * Store a newly created produit in storage.
     *
     * @param CreateproduitRequest $request
     *
     * @return Response
     */
    public function store(CreateproduitRequest 
        $request)
    {
       // $input = $request->all();
        $request ->validate([
            'nom' => 'required',
            'description' => 'required',
            'qte' => 'required',
            'emplacement' => 'required',
            'price' => 'required',
            'categorie_id' => 'required',
            'image' => 'required|image| mimes:jpeg,jpg,png | max:1000 | dimensions:max-width=50,max-height=50'
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data =array(
            'nom' => $request->nom,
         'description' => $request->description,
         'qte' => $request->qte,
         'emplacement' => $request->emplacement,
         'price' => $request->price,
         'categorie_id' => $request->categorie_id,
         'image' => $new_name
     );
       // Produit::create($form_data);
         $produit = $this->produitRepository->create($form_data);
        return redirect(route('produits.index'))->with('success','Data Added successfully.');

       

       // Flash::success('Produit saved successfully.');

       // return redirect(route('produits.index'));
    }

    /**
     * Display the specified produit.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produit = $this->produitRepository->find($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        return view('produits.show')->with('produit', $produit);
    }
    

    /**
     * Show the form for editing the specified produit.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produit = $this->produitRepository->find($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.categori','chaussure'));
        }

        return view('produits.edit')->with('produit', $produit);
    }

    /**
     * Update the specified produit in storage.
     *
     * @param int $id
     * @param UpdateproduitRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproduitRequest $request)
    {
        $produit = $this->produitRepository->find($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

       // $produit = $this->produitRepository->update($request->all(), $id);

        //Flash::success('Produit updated successfully.');

        //return redirect(route('produits.index'));
         $request ->updated([
            'nom' => 'required',
            'description' => 'required',
            'qte' => 'required',
            'emplacement' => 'required',
            'categorie_id' => 'required',
            'image' => 'required|image| mimes:jpeg,jpg,png | max:1000 | dimensions:max-width=50,max-height=50'
        ], $id);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data =array(
            'nom' => $request->nom,
         'description' => $request->description,
         'qte' => $request->qte,
         'emplacement' => $request->emplacement,
         'categorie_id' => $request->categorie_id,
         'image' => $new_name
     );
       // Produit::create($form_data);
         $produit = $this->produitRepository->create($form_data);
        return redirect(route('produits.index'))->with('success','Data Added successfully.');

    }

    /**
     * Remove the specified produit from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produit = $this->produitRepository->find($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        $this->produitRepository->delete($id);

        Flash::success('Produit deleted successfully.');

        return redirect(route('produits.index'));
    }
}
