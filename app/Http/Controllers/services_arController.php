<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createservices_arRequest;
use App\Http\Requests\Updateservices_arRequest;
use App\Repositories\services_arRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class services_arController extends AppBaseController
{
    /** @var  services_arRepository */
    private $servicesArRepository;

    public function __construct(services_arRepository $servicesArRepo)
    {
        $this->servicesArRepository = $servicesArRepo;
    }

    /**
     * Display a listing of the services_ar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->servicesArRepository->pushCriteria(new RequestCriteria($request));
        $servicesArs = $this->servicesArRepository->all();

        return view('services_ars.index')
            ->with('servicesArs', $servicesArs);
    }

    /**
     * Show the form for creating a new services_ar.
     *
     * @return Response
     */
    public function create()
    {
        return view('services_ars.create');
    }

    /**
     * Store a newly created services_ar in storage.
     *
     * @param Createservices_arRequest $request
     *
     * @return Response
     */
    public function store(Createservices_arRequest $request)
    {
        $input = $request->all();

        $servicesAr = $this->servicesArRepository->create($input);

        Flash::success('Services Ar saved successfully.');

        return redirect(route('servicesArs.index'));
    }

    /**
     * Display the specified services_ar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicesAr = $this->servicesArRepository->findWithoutFail($id);

        if (empty($servicesAr)) {
            Flash::error('Services Ar not found');

            return redirect(route('servicesArs.index'));
        }

        return view('services_ars.show')->with('servicesAr', $servicesAr);
    }

    /**
     * Show the form for editing the specified services_ar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicesAr = $this->servicesArRepository->findWithoutFail($id);

        if (empty($servicesAr)) {
            Flash::error('Services Ar not found');

            return redirect(route('servicesArs.index'));
        }

        return view('services_ars.edit')->with('servicesAr', $servicesAr);
    }

    /**
     * Update the specified services_ar in storage.
     *
     * @param  int              $id
     * @param Updateservices_arRequest $request
     *
     * @return Response
     */
    public function update($id, Updateservices_arRequest $request)
    {
        $servicesAr = $this->servicesArRepository->findWithoutFail($id);

        if (empty($servicesAr)) {
            Flash::error('Services Ar not found');

            return redirect(route('servicesArs.index'));
        }

        $servicesAr = $this->servicesArRepository->update($request->all(), $id);

        Flash::success('Services Ar updated successfully.');

        return redirect(route('servicesArs.index'));
    }

    /**
     * Remove the specified services_ar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicesAr = $this->servicesArRepository->findWithoutFail($id);

        if (empty($servicesAr)) {
            Flash::error('Services Ar not found');

            return redirect(route('servicesArs.index'));
        }

        $this->servicesArRepository->delete($id);

        Flash::success('Services Ar deleted successfully.');

        return redirect(route('servicesArs.index'));
    }
}
