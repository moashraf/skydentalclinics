<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSERVICERequest;
use App\Http\Requests\UpdateSERVICERequest;
use App\Repositories\SERVICERepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Notifications\figoname;

use Flash;
use App\User;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SERVICEController extends AppBaseController
{
    /** @var  SERVICERepository */
    private $sERVICERepository;

    public function __construct(SERVICERepository $sERVICERepo)
    {
        $this->sERVICERepository = $sERVICERepo;
    }

    /**
     * Display a listing of the SERVICE.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sERVICERepository->pushCriteria(new RequestCriteria($request));
        $sERVICES = $this->sERVICERepository->all();

        return view('s_e_r_v_i_c_e_s.index')
            ->with('sERVICES', $sERVICES);
    }

    /**
     * Show the form for creating a new SERVICE.
     *
     * @return Response
     */
    public function create()
    {
        return view('s_e_r_v_i_c_e_s.create');
    }

    /**
     * Store a newly created SERVICE in storage.
     *
     * @param CreateSERVICERequest $request
     *
     * @return Response
     */
    public function store(CreateSERVICERequest $request)
    {
		 $input = $request->all();
		
	//	dd($input['single_photo']);
		 
        if (!empty($input['single_photo'])) {
            $photoexplode = $request->single_photo->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
       $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
       $input['single_photo']=    $imageNameGallery; 
   //   dd(  $input['single_photo']);
       
       }else{
       $input['single_photo']=    'logo.png'; 
           
       }


	   
	   
 
        $sERVICE = $this->sERVICERepository->create($input);
		$users= User::all();
		$post= User::find(1);
\Notification::send($users, new figoname($post));

		
        Flash::success('S E R V I C E saved successfully.');

        return redirect(route('sERVICES.index'));
    }

    /**
     * Display the specified SERVICE.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sERVICE = $this->sERVICERepository->findWithoutFail($id);

        if (empty($sERVICE)) {
            Flash::error('S E R V I C E not found');

            return redirect(route('sERVICES.index'));
        }

        return view('s_e_r_v_i_c_e_s.show')->with('sERVICE', $sERVICE);
    }

    /**
     * Show the form for editing the specified SERVICE.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sERVICE = $this->sERVICERepository->findWithoutFail($id);

        if (empty($sERVICE)) {
            Flash::error('S E R V I C E not found');

            return redirect(route('sERVICES.index'));
        }

        return view('s_e_r_v_i_c_e_s.edit')->with('sERVICE', $sERVICE);
    }

    /**
     * Update the specified SERVICE in storage.
     *
     * @param  int              $id
     * @param UpdateSERVICERequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSERVICERequest $request)
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

	   
	   
        $sERVICE = $this->sERVICERepository->findWithoutFail($id);

        if (empty($sERVICE)) {
            Flash::error('S E R V I C E not found');

            return redirect(route('sERVICES.index'));
        }

        $sERVICE = $this->sERVICERepository->update( $input , $id);

        Flash::success('S E R V I C E updated successfully.');

        return redirect(route('sERVICES.index'));
    }

    /**
     * Remove the specified SERVICE from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sERVICE = $this->sERVICERepository->findWithoutFail($id);

        if (empty($sERVICE)) {
            Flash::error('S E R V I C E not found');

            return redirect(route('sERVICES.index'));
        }

        $this->sERVICERepository->delete($id);

        Flash::success('S E R V I C E deleted successfully.');

        return redirect(route('sERVICES.index'));
    }
}
