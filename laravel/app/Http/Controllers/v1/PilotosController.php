<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Piloto;
use Illuminate\Http\Request;
use App\Models\User;

class PilotosController extends Controller
{
    /* GET */
    public function getAll()
    {
        $response_local=new \stdClass();
        $pilotos = Piloto::all();
        $response_local->success=true;
        $response_local->data=$pilotos;
        return response()->json($response_local,200);
    }

    /* GET->ITEM */
    public function getItem($id)
    {
        $response_local=new \stdClass();

        $piloto = Piloto::find($id);

        $response_local->data=$piloto;
        $response_local->success=true;
        return response()->json($response_local,200);
    }

    /* POST */
    public function store(Request $request)
    {
        $response_local=new \stdClass();

        $piloto = new Piloto();
        $piloto->id=$request->id;
        $piloto->nombres=$request->nombres;
        $piloto->ap_Paterno=$request->ap_Paterno;
        $piloto->ap_Materno=$request->ap_Materno;
        $piloto->fechaNacimiento=$request->fechaNacimiento;
        $piloto->edad=$request->edad;
        $piloto->pais=$request->pais;
        $piloto->ciudad=$request->ciudad;
        $piloto->save();

        $response_local->data=$piloto;
        $response_local->success=true;
        return response()->json($response_local,200);
    }

    /* PUT */
    public function update(Request $request,$id)
    {
        $response_local=new \stdClass();

        $piloto = Piloto::find($id);
        $piloto->id=$request->id;
        $piloto->nombres=$request->nombres;
        $piloto->ap_Paterno=$request->ap_Paterno;
        $piloto->ap_Materno=$request->ap_Materno;
        $piloto->fechaNacimiento=$request->fechaNacimiento;
        $piloto->edad=$request->edad;
        $piloto->pais=$request->pais;
        $piloto->ciudad=$request->ciudad;
        $piloto->save();

        $response_local->success=true;
        return response()->json($response_local,200);
    }

    /* PATCH */
    public function patchUpdate(Request $request,$id)
    {
        $response_local=new \stdClass();
        $piloto = Piloto::find($id);

        if($request->id!=null)
        {
            $piloto->id=$request->id;
        }

        if($request->nombres!=null)
        {
            $piloto->nombres=$request->nombres;
        }

        if($request->ap_Paterno!=null)
        {
            $piloto->ap_Paterno=$request->ap_Paterno;
        }

        if($request->ap_Materno!=null)
        {
            $piloto->ap_Materno=$request->ap_Materno;
        }

        if($request->fechaNacimiento!=null)
        {
            $piloto->fechaNacimiento=$request->fechaNacimiento;
        }

        if($request->edad!=null)
        {
            $piloto->edad=$request->edad;
        }

        if($request->pais!=null)
        {
            $piloto->pais=$request->pais;
        }

        if($request->ciudad!=null){
            $piloto->ciudad=$request->ciudad;
        }

        $piloto->save();

        $response_local->data=$piloto;
        $response_local->success=true;
        return response()->json($response_local,200);
    }

    /* DELETE */
    public function delete($id)
    {
        $response_local=new \stdClass();

        $piloto = Piloto::find($id);
        $piloto->delete();

        $response_local->success=true;
        return response()->json($response_local,200);
    }
}