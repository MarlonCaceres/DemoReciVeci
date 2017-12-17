<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        Mail::send('Mails.form_involucrate',$request->all(),function($msj){
            $msj->subject('Correo de contacto');
            $msj->to('mricky3021@gmail.com');
        });
        //echo " $request";
        
        /*$name_user=isset($_POST['Nombres'])?$_POST['Nombres']:'';
        $mail_user=isset($_POST['Correo'])?$_POST['Correo']:'';
        $msj=isset($_POST['Mensaje'])?$_POST['Mensaje']:'';


        $to='mricky3021@gmail.com';
        $asunto=isset($_POST['Tipo'])?$_POST['Tipo']:'';
        $mensaje=$name_user." ".$mail_user." ".$msj;


        try {
            mail($to,$asunto,$mensaje,'');    
        } catch (Exception $e) {
            echo $e;
        }
        */
                

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
