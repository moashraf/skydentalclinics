<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesliderRequest;
use App\Http\Requests\UpdatesliderRequest;
use App\Repositories\sliderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\projects_cat;

class sliderController extends AppBaseController
{
    /** @var  sliderRepository */
    private $sliderRepository;
 
    public function __construct(sliderRepository $sliderRepo)
    {
        $this->sliderRepository = $sliderRepo;
    }

    /**
     * Display a listing of the slider.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sliderRepository->pushCriteria(new RequestCriteria($request));
        $sliders = $this->sliderRepository->all();

        return view('sliders.index')
            ->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new slider.
     *
     * @return Response
     */
    public function create()
    {
        return view('sliders.create');
     }

    /**
     * Store a newly created slider in storage.
     *
     * @param CreatesliderRequest $request
     *
     * @return Response
     */
    public function store(CreatesliderRequest $request)
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




        $slider = $this->sliderRepository->create($input);

        Flash::success('Slider saved successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified slider.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.show')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified slider.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.edit')->with('slider', $slider);
    }

    /**
     * Update the specified slider in storage.
     *
     * @param  int              $id
     * @param UpdatesliderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesliderRequest $request)
    {
        $input = $request->all();
        $slider = $this->sliderRepository->findWithoutFail($id);
    if (!empty($input['single_photo'])) {
            $photoexplode = $request->single_photo->getClientOriginalName();
            $photoexplode = explode(".", $photoexplode);
            $namerand = rand();
            $namerand.= $photoexplode[0];
            $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
            $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
            $input['single_photo']=    $imageNameGallery;
       } 


        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        $slider = $this->sliderRepository->update(    $input, $id);

        Flash::success('Slider updated successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified slider from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        $this->sliderRepository->delete($id);

        Flash::success('Slider deleted successfully.');

        return redirect(route('sliders.index'));
    }
}
