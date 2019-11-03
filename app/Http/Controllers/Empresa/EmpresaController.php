<?php

namespace App\Http\Controllers\Empresa;

use App\Empresas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresas::all();

        return $empresas;
    }

    public function show($id)
    {
        $empresa = Empresas::findOrFail($id);

        return response()->json(['data' => $empresa], 200);
    }

    public function store(Request $request)
    {
        $campos = $request->all();
        $campos['pin'] = bcrypt($request->pin);

        $empresa = Empresas::create($campos);

        return response()->json(['data' => $empresa], 201);
    }
}
