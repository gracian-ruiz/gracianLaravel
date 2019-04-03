<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::all();

        return view("productos.index",compact("productos"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("productos.create");
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

         /*$this->validate($request, ['Seccion'=>'required']);

         //return view("productos.insert");
        //
        $producto=new Producto;

        $producto->NombreArticulo=$request->NombreArticulo;
        $producto->Seccion=$request->Seccion;
        $producto->Precio=$request->Precio;
        $producto->Fecha=$request->Fecha;
        $producto->PaisOrigen=$request->PaisOrigen;
           

        $producto->save();

          return redirect("/productos");
          */
         
         $entrada=$request->all();

         if($archivo=$request->file('file')){

            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $entrada['ruta']=$nombre;
         }

         Producto::create($entrada);
    }

   //return $request->file('file')

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //
        $producto=Producto::findOrFail($id);

        return view ("productos.show",compact("producto"));
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
        $producto=Producto::findOrFail($id);

        return view ("productos.edit",compact("producto"));
    
    }
    public function prueba2()
    {
        //
        $productos=Producto::all();

        return view("productos.edit2",compact("productos"));
    
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
         $producto=Producto::findOrFail($id);
         $producto->update($request->all());
         return redirect("/productos");

         //return view("productos.update");
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

        $producto=Producto::findOrFail($id);

        

         $producto->delete();


          return redirect("/productos");
        //
    }

    public function borrarVista()
    {

        $productos=Producto::all();

        return view("productos.eliminar2",compact("productos"));

        
    }

    public function borrarCont($id)
    {

        $producto=Producto::findOrFail($id);

        

         $producto->delete();


          return redirect("/productos");
        //
    }
}
