<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $datosProducto=Producto::all();
            return view('producto.index')->with('productos',$datosProducto);

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $productos = new Producto();
       $productos->codigo=$request->get('codigo');
       $productos->nombre=$request->get('nombre');
       $productos->descri=$request->get('decrip');
       $productos->precio=$request->get('precio');

       $productos->save();

       return redirect('/productos');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
