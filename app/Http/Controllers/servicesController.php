<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
use App\Repositories\servicesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Validator;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\services_ar;
use App\Models\services_en;

class servicesController extends AppBaseController
{
    /** @var  servicesRepository */
    private $servicesRepository;

    public function __construct(servicesRepository $servicesRepo)
    {
        $this->servicesRepository = $servicesRepo;
    }

    /**
     * Display a listing of the services.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->servicesRepository->pushCriteria(new RequestCriteria($request));
        $services = $this->servicesRepository->all();

        return view('services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new services.
     *
     * @return Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created services in storage.
     *
     * @param CreateservicesRequest $request
     *
     * @return Response
     */
    public function store(CreateservicesRequest $request)
    {
		
		
	$validator = Validator::make($request->all(), [
            'slug_ar' => 'required',
            'description_ar' => 'required',
            'title_ar' => 'required',
			  'slug_en' => 'required',
            'description_en' => 'required',
            'title_en' => 'required',
         ]);

        if ($validator->fails()) {
            return redirect('admin/services/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		
		
  $input = $request->all();
        if (!empty($input['image'])) {
            $photoexplode = $request->image->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->image->getClientOriginalExtension();
       $request->image->move(base_path() . '/public/images/', $imageNameGallery);
       $input['image']=    $imageNameGallery; 
      
       
       }else{
       $input['image']=    'logo.png'; 
           
       }

	   
	   if (!empty($input['icon'])) {
            $photoexplode = $request->icon->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->icon->getClientOriginalExtension();
       $request->icon->move(base_path() . '/public/images/', $imageNameGallery);
       $input['icon']=    $imageNameGallery; 
      
       
       }else{
       $input['icon']=    'logo.png'; 
           
       }

	   
	   
	   $input['status']=1;
		 

        $services = $this->servicesRepository->create($input);
//dd( );
		$services_ar = new services_ar;
        $services_ar->title = $request->title_ar;
        $services_ar->id_services =$services->id;
        $services_ar->description = $request->description_ar;
        $services_ar->slug = $request->slug_ar;
        $services_ar->save();
		
			
		
		
		
		$services_en = new services_en;
        $services_en->title = $request->title_en;
        $services_en->id_services =$services->id;
        $services_en->description = $request->description_en;
        $services_en->slug = $request->slug_en;
        $services_en->save();
		
		
		
	 

		
        Flash::success('Services saved successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.show')->with('services', $services);
    }

    /**
     * Show the form for editing the specified services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);
		$services_ar=services_ar::where('id_services', $id)->first();
		$services_en=services_en::where('id_services', $id)->first();
		//  	dd($services_ar);
        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.edit')->with('services', $services)->with('services_ar', $services_ar)->with('services_en', $services_en);
    }

    /**
     * Update the specified services in storage.
     *
     * @param  int              $id
     * @param UpdateservicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateservicesRequest $request)
    {
		
		$validator = Validator::make($request->all(), [
            'slug_ar' => 'required',
            'description_ar' => 'required',
            'title_ar' => 'required',
			  'slug_en' => 'required',
            'description_en' => 'required',
            'title_en' => 'required',
         ]);

        if ($validator->fails()) {
            return \Redirect::back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
        $services = $this->servicesRepository->findWithoutFail($id);
		
		
			
  $input = $request->all();
        if (!empty($input['image'])) {
            $photoexplode = $request->image->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->image->getClientOriginalExtension();
       $request->image->move(base_path() . '/public/images/', $imageNameGallery);
       $input['image']=    $imageNameGallery; 
      
       
       }else{
       $input['image']=    'logo.png'; 
           
       }

	   
	   	$services_ar=services_ar::where('id_services', $id)->first();
         $services_ar->title = $request->title_ar;
        $services_ar->id_services =$services->id;
        $services_ar->description = $request->description_ar;
        $services_ar->slug = $request->slug_ar;
        $services_ar->save();
		
		$services_en=services_en::where('id_services', $id)->first();
         $services_en->title = $request->title_en;
        $services_en->id_services =$services->id;
        $services_en->description = $request->description_en;
        $services_en->slug = $request->slug_en;
        $services_en->save();
		
		
		
	   

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        $services = $this->servicesRepository->update(  $input, $id);

        Flash::success('Services updated successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified services from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
		 
		
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

       $services_main= $this->servicesRepository->delete($id);
		
		$services_ar=services_ar::where('id_services','=',$id);
		 $services_ar->delete();
		 
		 $services_en=services_en::where('id_services','=',$id);
		 $services_en->delete();
        Flash::success('Services deleted successfully.');

        return redirect(route('services.index'));
    }
}
