<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNEWSRequest;
use App\Http\Requests\UpdateNEWSRequest;
use App\Repositories\NEWSRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NEWSController extends AppBaseController
{
    /** @var  NEWSRepository */
    private $nEWSRepository;

    public function __construct(NEWSRepository $nEWSRepo)
    {
        $this->nEWSRepository = $nEWSRepo;
    }

    /**
     * Display a listing of the NEWS.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nEWSRepository->pushCriteria(new RequestCriteria($request));
        $nEWS = $this->nEWSRepository->all();

        return view('n_e_w_s.index')
            ->with('nEWS', $nEWS);
    }

    /**
     * Show the form for creating a new NEWS.
     *
     * @return Response
     */
    public function create()
    {
        return view('n_e_w_s.create');
    }

    /**
     * Store a newly created NEWS in storage.
     *
     * @param CreateNEWSRequest $request
     *
     * @return Response
     */
    public function store(CreateNEWSRequest $request)
    {
$input = $request->all();
        if (!empty($input['single_photo'])) {
            $photoexplode = $request->single_photo->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
       $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
       $input['single_photo']=    $imageNameGallery; 
      
       
       }else{
       $input['single_photo']=    'logo.png'; 
           
       }

        $nEWS = $this->nEWSRepository->create($input);

        Flash::success('N E W S saved successfully.');

        return redirect(route('nEWS.index'));
    }

    /**
     * Display the specified NEWS.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nEWS = $this->nEWSRepository->findWithoutFail($id);

        if (empty($nEWS)) {
            Flash::error('N E W S not found');

            return redirect(route('nEWS.index'));
        }

        return view('n_e_w_s.show')->with('nEWS', $nEWS);
    }

    /**
     * Show the form for editing the specified NEWS.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nEWS = $this->nEWSRepository->findWithoutFail($id);

        if (empty($nEWS)) {
            Flash::error('N E W S not found');

            return redirect(route('nEWS.index'));
        }

        return view('n_e_w_s.edit')->with('nEWS', $nEWS);
    }

    /**
     * Update the specified NEWS in storage.
     *
     * @param  int              $id
     * @param UpdateNEWSRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNEWSRequest $request)
    {
        $input = $request->all();
        if (!empty($input['single_photo'])) {
            $photoexplode = $request->single_photo->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
       $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
       $input['single_photo']=    $imageNameGallery; 
      
       
       }else{
       $input['single_photo']=    'logo.png'; 
           
       }

	   
	   $nEWS = $this->nEWSRepository->findWithoutFail($id);

        if (empty($nEWS)) {
            Flash::error('N E W S not found');

            return redirect(route('nEWS.index'));
        }

        $nEWS = $this->nEWSRepository->update( $input, $id);

        Flash::success('N E W S updated successfully.');

        return redirect(route('nEWS.index'));
    }

    /**
     * Remove the specified NEWS from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nEWS = $this->nEWSRepository->findWithoutFail($id);

        if (empty($nEWS)) {
            Flash::error('N E W S not found');

            return redirect(route('nEWS.index'));
        }

        $this->nEWSRepository->delete($id);

        Flash::success('N E W S deleted successfully.');

        return redirect(route('nEWS.index'));
    }
}
