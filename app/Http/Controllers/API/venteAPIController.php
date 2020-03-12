<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateventeAPIRequest;
use App\Http\Requests\API\UpdateventeAPIRequest;
use App\Models\vente;
use App\Repositories\venteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class venteController
 * @package App\Http\Controllers\API
 */

class venteAPIController extends AppBaseController
{
    /** @var  venteRepository */
    private $venteRepository;

    public function __construct(venteRepository $venteRepo)
    {
        $this->venteRepository = $venteRepo;
    }

    /**
     * Display a listing of the vente.
     * GET|HEAD /ventes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $ventes = $this->venteRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($ventes->toArray(), 'Ventes retrieved successfully');
    }

    /**
     * Store a newly created vente in storage.
     * POST /ventes
     *
     * @param CreateventeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateventeAPIRequest $request)
    {
        $input = $request->all();

        $vente = $this->venteRepository->create($input);

        return $this->sendResponse($vente->toArray(), 'Vente saved successfully');
    }

    /**
     * Display the specified vente.
     * GET|HEAD /ventes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var vente $vente */
        $vente = $this->venteRepository->find($id);

        if (empty($vente)) {
            return $this->sendError('Vente not found');
        }

        return $this->sendResponse($vente->toArray(), 'Vente retrieved successfully');
    }

    /**
     * Update the specified vente in storage.
     * PUT/PATCH /ventes/{id}
     *
     * @param int $id
     * @param UpdateventeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateventeAPIRequest $request)
    {
        $input = $request->all();

        /** @var vente $vente */
        $vente = $this->venteRepository->find($id);

        if (empty($vente)) {
            return $this->sendError('Vente not found');
        }

        $vente = $this->venteRepository->update($input, $id);

        return $this->sendResponse($vente->toArray(), 'vente updated successfully');
    }

    /**
     * Remove the specified vente from storage.
     * DELETE /ventes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var vente $vente */
        $vente = $this->venteRepository->find($id);

        if (empty($vente)) {
            return $this->sendError('Vente not found');
        }

        $vente->delete();

        return $this->sendSuccess('Vente deleted successfully');
    }
}
