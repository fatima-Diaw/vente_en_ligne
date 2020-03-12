<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateproduittAPIRequest;
use App\Http\Requests\API\UpdateproduittAPIRequest;
use App\Models\produitt;
use App\Repositories\produittRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class produittController
 * @package App\Http\Controllers\API
 */

class produittAPIController extends AppBaseController
{
    /** @var  produittRepository */
    private $produittRepository;

    public function __construct(produittRepository $produittRepo)
    {
        $this->produittRepository = $produittRepo;
    }

    /**
     * Display a listing of the produitt.
     * GET|HEAD /produitts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $produitts = $this->produittRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($produitts->toArray(), 'Produitts retrieved successfully');
    }

    /**
     * Store a newly created produitt in storage.
     * POST /produitts
     *
     * @param CreateproduittAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateproduittAPIRequest $request)
    {
        $input = $request->all();

        $produitt = $this->produittRepository->create($input);

        return $this->sendResponse($produitt->toArray(), 'Produitt saved successfully');
    }

    /**
     * Display the specified produitt.
     * GET|HEAD /produitts/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var produitt $produitt */
        $produitt = $this->produittRepository->find($id);

        if (empty($produitt)) {
            return $this->sendError('Produitt not found');
        }

        return $this->sendResponse($produitt->toArray(), 'Produitt retrieved successfully');
    }

    /**
     * Update the specified produitt in storage.
     * PUT/PATCH /produitts/{id}
     *
     * @param int $id
     * @param UpdateproduittAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproduittAPIRequest $request)
    {
        $input = $request->all();

        /** @var produitt $produitt */
        $produitt = $this->produittRepository->find($id);

        if (empty($produitt)) {
            return $this->sendError('Produitt not found');
        }

        $produitt = $this->produittRepository->update($input, $id);

        return $this->sendResponse($produitt->toArray(), 'produitt updated successfully');
    }

    /**
     * Remove the specified produitt from storage.
     * DELETE /produitts/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var produitt $produitt */
        $produitt = $this->produittRepository->find($id);

        if (empty($produitt)) {
            return $this->sendError('Produitt not found');
        }

        $produitt->delete();

        return $this->sendSuccess('Produitt deleted successfully');
    }
}
