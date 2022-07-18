<?php

namespace App\Http\Controllers\v1;

use App\Models\Piloto;
use App\Http\Controllers\Controller;
use App\Models\User;

class PilotosController extends Controller
{
    public function getPilotos()
    {
        $response_local=new \stdClass();
        $response_local->success=true;
        $response_local->data=Piloto::all();
        return response()->json($response_local,200);
    }
}