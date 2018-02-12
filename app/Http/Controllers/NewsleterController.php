<?php

namespace App\Http\Controllers;

use DB;

use Carbon\Carbon;

use App\Newsletter as Newsletter;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsleterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "listado del newsletter";

        $newsletters = DB::table('newsletter')->get();
        
        return $newsletters;  
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
     



            // $newsletter = new Newsletter();
            // $newsletter->name = $request->input('name');
            // $newsletter->email = $request->input('email');

            if($request->isMethod('put')){

       
              
    

          //Guardar newsletter
         DB::table('newsletter')->insert([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),

            ]);

         return response()->json(['created' =>'true'])->setStatusCode(Response::HTTP_CREATED, Response::$statusTexts[Response::HTTP_CREATED]);
        }
            
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
