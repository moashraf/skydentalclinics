<?php

namespace App\Http\Controllers;

 use App\Models\services_en;
use App\Models\services_ar;
  use App\Models\NEWS;
use App\Models\clients;
  use App\Models\image;
use App\Models\services;
use App\Models\order;
use App\Models\slider;
 
use Illuminate\Http\Request;

class HomeController extends Controller
{

	


  public function singel_cat($id)
    {
      $Categories_Products = Categories_Products::where('id' ,'=', $id)->get();
	  if(  !$Categories_Products->isEmpty()   ){  

  $Products = Products::where('cat_id','=',$Categories_Products[0]['id'])->paginate(20);
        return view('main.all_property', 
            [
             'Categories_Products' => $Categories_Products, 
               'Products' => $Products, 
             ]);
  // dd(    $Categories_Products[0]['id']); 
   
   }else{
	   
	   
	    return redirect('/');
 
   }
	 
     
    }

	
	 public function ar()
    {
		
		 App()->setLocale('ar');
		 
		 
  $slider = slider::limit(50)->get();
  $services = services::with('get_services_description_en')->get();
  $services_ar = services_ar::limit(50)->get();
  $services_en = services_en::limit(50)->get();
  $image = image::limit(50)->get(); 
 
 //dd( $services);
 		 return view('main.index',
            [
                  'services_ar' => $services_ar ,  
                 'services_en' => $services_en ,  
				 'image' => $image ,   
				 'slider' => $slider ,  
				 'services' => $services ,
            ]);
    }
	
	
	
	 public function en()
    {
		
		App()->setLocale('en');
		  $slider = slider::limit(50)->get();

  $NEWS = NEWS::limit(50)->get();
  $services = services::with('get_services_description_en')->get();
  $services_ar = services_ar::limit(50)->get();
  $services_en = services_en::limit(50)->get();
  $image = image::limit(50)->get(); 
 
 //dd( $services);
 		 return view('main.index',
            [
                 
				 'slider' => $slider ,  
				 'services_ar' => $services_ar ,  
                 'services_en' => $services_en ,  
				 'image' => $image ,   
				 'NEWS' => $NEWS ,  
				 'services' => $services ,
            ]);
    }
	
	
	
    public function done()
    {
     
       return view('main.thankspage');
    }


	
	
	public function orders_get()
    {
                return view('main.orders');

    }
	
	
	
	public function orders( request $request)
    {
        $input = $request->all();

        $order = order::create($input);

 	    return redirect('/');

       // return redirect(route('done'));
    }
	
	
    public function  form(Request $request) 
    {

        $to = "mohamed.be4em@gmail.com  , a.badr.be4em@gmail.com";
        $subject = "بامبو نيو هاوس        ";
        $neme = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['mail'];
         $message="<html><head><title> بامبو نيو هاوس         </title>
        </head><body><table>
        <tr><th>Firstname</th><th>phone</th><th>email</th></tr>
        <tr> <td>$neme  </td><td>$phone  </td><td>$email  </td> </tr>
        </table></body></html> ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@scpc-eg.com>' . "\r\n";

           if(isset($_POST['phone'])){
        if(mail($to,$subject,$message,$headers)){
           header("Location: http://scpc-eg.com/");
        }else{  echo "Mail Not Sent"; } }  
        


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
	
	
	
	
	 public function video()
    {
		
    $video = video::limit(50)->get();

 		 return view('main.video',
            [
                 'video' => $video 
            ]);
    }
	
	
	
	 public function image()
    {
  $image = image::limit(50)->get();

 		 return view('main.image',
            [
                 'image' => $image 
            ]);
    }
	
	  
	  
	
	
	
	   public function news()
    {
 
 $NEWS = NEWS::limit(50)->get();
		 return view('main.news',
            [
                 'NEWS' => $NEWS 
            ]);
    }
	
	
	
	   public function singel_news($id)
    {
 
  $NEWS = NEWS::where('id', $id)->first();
                if (!is_null($NEWS)) {
                 		 return view('main.singel_news',
                        [
                            'NEWS' => $NEWS,
                        ]);
                } else {
                   // return redirect('/');

                }
		  }
	
	
	   public function singel_services($id)
    {
 
  $services = SERVICE::where('id', $id)->first();
                if (!is_null($services)) {
                 		 return view('main.singel_services',
                        [
                            'services' => $services,
                        ]);
                } else {
                   // return redirect('/');

                }
		  }
	
	
	
	
	
	
	 public function About()
    {
 
 		 return view('main.about_us' );
    }
	
	 public function Contact()
    {
 
 $SERVICE = SERVICE::limit(12)->get();
		 return view('main.Contact',
            [
                 'SERVICE' => $SERVICE 
            ]);
    }
	
	
	
	
	  public function projects()
    {
       $Categories_Products = projects_cat::limit(50)->get();

 $projects = slider::limit(40)->get();
		 return view('main.all_projects',
            [
			             'Categories_Products' => $Categories_Products, 

                 'projects' => $projects 
            ]);
    }
	
	
	
	
	public function services()
    {
 
 $SERVICE = SERVICE::limit(50)->get();
		 return view('main.services',
            [
                 'SERVICE' => $SERVICE 
            ]);
    }
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
