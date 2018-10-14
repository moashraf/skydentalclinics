<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Categories_Products;
use App\Models\Products;

class ARsiteController extends Controller
{


    function __construct() { 
        App()->setLocale('ar');

   }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('main.about');
    } 
    
    
    
    public function sendmail(Request $request)
    {
         
        $to = "mohamed.be4em@gmail.com";
        $subject = " syrianegyptionco  email";
        $message = mail_code($request->name, $request->email,$request->phone, $request->message);
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <info@syrianegyptionco.com>' . "\r\n";
        mail($to, $subject, $message, $headers);
      
    } 
    
    public function contact()
    {
        return view('main.contact');
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
