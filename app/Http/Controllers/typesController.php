<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetypesRequest;
use App\Http\Requests\UpdatetypesRequest;
use App\Repositories\typesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class typesController extends AppBaseController
{
    /** @var  typesRepository */
    private $typesRepository;

    public function __construct(typesRepository $typesRepo)
    {
        $this->typesRepository = $typesRepo;
    }

    /**
     * Display a listing of the types.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->typesRepository->pushCriteria(new RequestCriteria($request));
        $types = $this->typesRepository->all();

        return view('types.index')
            ->with('types', $types);
    }

    /**
     * Show the form for creating a new types.
     *
     * @return Response
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created types in storage.
     *
     * @param CreatetypesRequest $request
     *
     * @return Response
     */
    public function store(CreatetypesRequest $request)
    {
        $input = $request->all();

        $types = $this->typesRepository->create($input);

        Flash::success('Types saved successfully.');

        return redirect(route('types.index'));
    }

    /**
     * Display the specified types.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $types = $this->typesRepository->findWithoutFail($id);

        if (empty($types)) {
            Flash::error('Types not found');

            return redirect(route('types.index'));
        }

        return view('types.show')->with('types', $types);
    }

    /**
     * Show the form for editing the specified types.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $types = $this->typesRepository->findWithoutFail($id);

        if (empty($types)) {
            Flash::error('Types not found');

            return redirect(route('types.index'));
        }

        return view('types.edit')->with('types', $types);
    }

    /**
     * Update the specified types in storage.
     *
     * @param  int              $id
     * @param UpdatetypesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetypesRequest $request)
    {
        $types = $this->typesRepository->findWithoutFail($id);

        if (empty($types)) {
            Flash::error('Types not found');

            return redirect(route('types.index'));
        }

        $types = $this->typesRepository->update($request->all(), $id);

        Flash::success('Types updated successfully.');

        return redirect(route('types.index'));
    }

    /**
     * Remove the specified types from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $types = $this->typesRepository->findWithoutFail($id);

        if (empty($types)) {
            Flash::error('Types not found');

            return redirect(route('types.index'));
        }

        $this->typesRepository->delete($id);

        Flash::success('Types deleted successfully.');

        return redirect(route('types.index'));
    }
}
