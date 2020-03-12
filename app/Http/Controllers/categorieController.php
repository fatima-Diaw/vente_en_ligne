<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecategorieRequest;
use App\Http\Requests\UpdatecategorieRequest;
use App\Repositories\categorieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class categorieController extends AppBaseController
{
    /** @var  categorieRepository */
    private $categorieRepository;

    public function __construct(categorieRepository $categorieRepo)
    {
        $this->categorieRepository = $categorieRepo;
    }

    /**
     * Display a listing of the categorie.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categories = $this->categorieRepository->all();

        return view('categories.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new categorie.
     *
     * @return Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created categorie in storage.
     *
     * @param CreatecategorieRequest $request
     *
     * @return Response
     */
    public function store(CreatecategorieRequest $request)
    {
        $input = $request->all();

        $categorie = $this->categorieRepository->create($input);

        Flash::success('Categorie saved successfully.');

        return redirect(route('categories.index'));
        // $input = $request->all();
        /**$request ->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'required|image| mimes:jpeg,jpg,png | max:1000 | dimensions:max-width=50,max-height=50'
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data =array(
            'nom' => $request->nom,
         'description' => $request->description,
         'image' => $new_name
     );
       // Produit::create($form_data);
         $categorie = $this->categorieRepository->create($form_data);
        return redirect(route('categories.index'))->with('success','Data Added successfully.');*/

       

    }

    /**
     * Display the specified categorie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categorie = $this->categorieRepository->find($id);

        if (empty($categorie)) {
            Flash::error('Categorie not found');

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('categorie', $categorie);
    }

    /**
     * Show the form for editing the specified categorie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categorie = $this->categorieRepository->find($id);

        if (empty($categorie)) {
            Flash::error('Categorie not found');

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('categorie', $categorie);
    }

    /**
     * Update the specified categorie in storage.
     *
     * @param int $id
     * @param UpdatecategorieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecategorieRequest $request)
    {
        $categorie = $this->categorieRepository->find($id);

        if (empty($categorie)) {
            Flash::error('Categorie not found');

            return redirect(route('categories.index'));
        }

        $categorie = $this->categorieRepository->update($request->all(), $id);

        Flash::success('Categorie updated successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified categorie from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categorie = $this->categorieRepository->find($id);

        if (empty($categorie)) {
            Flash::error('Categorie not found');

            return redirect(route('categories.index'));
        }

        $this->categorieRepository->delete($id);

        Flash::success('Categorie deleted successfully.');

        return redirect(route('categories.index'));
    }
}
