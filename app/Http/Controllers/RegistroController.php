<?php

namespace sistema\Http\Controllers;

use Illuminate\Http\Request;
use sistema\Nacionalidad;
use sistema\Email;
use sistema\Direccion;
use sistema\Parroquia;
use sistema\Estado;
use sistema\Telefono;
use sistema\Profesion;
use sistema\Representante;
use sistema\Cuenta;
use sistema\Beca;
use sistema\Discapacidad;
use sistema\Institucion;
use sistema\Becado;
use sistema\Social;
use sistema\ProfeRepre;
use sistema\BecadoDisca;
use sistema\Http\Requests\RegistroRequest;


class RegistroController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('registro');
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('registro');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroRequest $request)
    {
        
        $nacionalidad= new Nacionalidad($request->all());
        $nacionalidad->save();
        

        $email= new Email($request->all());
        $email->save();

        $telefono = new Telefono($request->all());
        $telefono->save();
            
       
        $profesion = new Profesion($request->all());
        $profesion->save();

            

        $representante= new Representante($request->all());
        $representante->nacionali_id = $nacionalidad->id;
        $representante->email_id = $email->id;
        $representante->tele_id = $telefono->id;
        $representante->save();

        
        $profe_repre= new ProfeRepre($request->all());
        $profe_repre->repres_id = $profesion->id;
        $profe_repre->prof_id = $representante->id;
        $profe_repre->save();
        
        
        
        $cuenta= new Cuenta($request->all());
        $cuenta->repre_id = $representante->id;
        $cuenta->save();



        //Tablas Becados


      $direccion= new Direccion($request->all());
      $direccion->save();

      $parroquia = new Parroquia($request->all());
      $parroquia->save();

        
        $estado = new Estado($request->all());
        $estado->save();

        $becas= new Beca($request->all());
        $becas->save();

            

        $discapacidad = new Discapacidad($request->all());
        $discapacidad->save();
        


        $institucion = new Institucion($request->all());
        $institucion->save();
        

        

        $becado = new Becado($request->all());
        $becado->repre_id = $representante->id;
        $becado->nacionalidad_id = $nacionalidad->id;
        $becado->estado_id = $estado->id;
        $becado->parro_id = $parroquia->id;
        $becado->dire_id = $direccion->id;
        $becado->beca_id = $becas->id;
        $becado->intitu_id = $institucion->id;

        $becado->save();

        $becado_disca= new BecadoDisca($request->all());
        $becado_disca->becados_id = $becado->id;
        $becado_disca->disca_id = $discapacidad->id;
        $becado_disca->save();

        $sociales= new Social($request->all());
        $sociales->becad_id = $becado->id;
        
        $sociales->save();
       

 
       flash('Registro Exitoso')->success(); 
        return redirect()->route('registro.index');



      
      


       
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
