<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproduittRequest;
use App\Http\Requests\UpdateproduittRequest;
use App\Repositories\produittRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class produittController extends AppBaseController
{
    /** @var  produittRepository */
    private $produittRepository;

    public function __construct(produittRepository $produittRepo)
    {
        $this->produittRepository = $produittRepo;
    }

    /**
     * Display a listing of the produitt.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $produitts = $this->produittRepository->all();

        return view('produitts.index')
            ->with('produitts', $produitts);
    }

    /**
     * Show the form for creating a new produitt.
     *
     * @return Response
     */
    public function create()
    {
        return view('produitts.create');
    }

    /**
     * Store a newly created produitt in storage.
     *
     * @param CreateproduittRequest $request
     *
     * @return Response
     */
    public function store(CreateproduittRequest $request)
    {
        $input = $request->all();

        $produitt = $this->produittRepository->create($input);

        Flash::success('Produitt saved successfully.');

        return redirect(route('produitts.index'));
    }

    /**
     * Display the specified produitt.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produitt = $this->produittRepository->find($id);

        if (empty($produitt)) {
            Flash::error('Produitt not found');

            return redirect(route('produitts.index'));
        }

        return view('produitts.show')->with('produitt', $produitt);
    }

    /**
     * Show the form for editing the specified produitt.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produitt = $this->produittRepository->find($id);

        if (empty($produitt)) {
            Flash::error('Produitt not found');

            return redirect(route('produitts.index'));
        }

        return view('produitts.edit')->with('produitt', $produitt);
    }

    /**
     * Update the specified produitt in storage.
     *
     * @param int $id
     * @param UpdateproduittRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproduittRequest $request)
    {
        $produitt = $this->produittRepository->find($id);

        if (empty($produitt)) {
            Flash::error('Produitt not found');

            return redirect(route('produitts.index'));
        }

        $produitt = $this->produittRepository->update($request->all(), $id);

        Flash::success('Produitt updated successfully.');

        return redirect(route('produitts.index'));
    }

    /**
     * Remove the specified produitt from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produitt = $this->produittRepository->find($id);

        if (empty($produitt)) {
            Flash::error('Produitt not found');

            return redirect(route('produitts.index'));
        }

        $this->produittRepository->delete($id);

        Flash::success('Produitt deleted successfully.');

        return redirect(route('produitts.index'));
    }
}
