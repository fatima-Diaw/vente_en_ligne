<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateventeRequest;
use App\Http\Requests\UpdateventeRequest;
use App\Repositories\venteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class venteController extends AppBaseController
{
    /** @var  venteRepository */
    private $venteRepository;

    public function __construct(venteRepository $venteRepo)
    {
        $this->venteRepository = $venteRepo;
    }

    /**
     * Display a listing of the vente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ventes = $this->venteRepository->all();

        return view('ventes.index')
            ->with('ventes', $ventes);
    }

    /**
     * Show the form for creating a new vente.
     *
     * @return Response
     */
    public function create()
    {
        return view('ventes.create');
    }

    /**
     * Store a newly created vente in storage.
     *
     * @param CreateventeRequest $request
     *
     * @return Response
     */
    public function store(CreateventeRequest $request)
    {
        $input = $request->all();

        $vente = $this->venteRepository->create($input);

        Flash::success('Vente saved successfully.');

        return redirect(route('ventes.index'));
    }

    /**
     * Display the specified vente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vente = $this->venteRepository->find($id);

        if (empty($vente)) {
            Flash::error('Vente not found');

            return redirect(route('ventes.index'));
        }

        return view('ventes.show')->with('vente', $vente);
    }

    /**
     * Show the form for editing the specified vente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vente = $this->venteRepository->find($id);

        if (empty($vente)) {
            Flash::error('Vente not found');

            return redirect(route('ventes.index'));
        }

        return view('ventes.edit')->with('vente', $vente);
    }

    /**
     * Update the specified vente in storage.
     *
     * @param int $id
     * @param UpdateventeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateventeRequest $request)
    {
        $vente = $this->venteRepository->find($id);

        if (empty($vente)) {
            Flash::error('Vente not found');

            return redirect(route('ventes.index'));
        }

        $vente = $this->venteRepository->update($request->all(), $id);

        Flash::success('Vente updated successfully.');

        return redirect(route('ventes.index'));
    }

    /**
     * Remove the specified vente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vente = $this->venteRepository->find($id);

        if (empty($vente)) {
            Flash::error('Vente not found');

            return redirect(route('ventes.index'));
        }

        $this->venteRepository->delete($id);

        Flash::success('Vente deleted successfully.');

        return redirect(route('ventes.index'));
    }
}
