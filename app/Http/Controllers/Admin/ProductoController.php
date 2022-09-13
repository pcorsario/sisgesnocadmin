<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('productos')->paginate(3);
        // dd($productos);
        return view('admin.productos.index', ['productos' => $productos]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $producto=new Producto();
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->save();
        $productos = DB::table('productos')->paginate(3);
        return view('admin.productos.index', ['productos' => $productos]);

    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $producto=Producto::where('id',$id)->firstOrFail();
        // dd($producto);
        return view('admin.productos.edit',compact('producto'));
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
        // dd($id);
        $producto=Producto::where('id',$id)->firstOrFail();
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->save();
        $productos = DB::table('productos')->paginate(3);
        return view('admin.productos.index', ['productos' => $productos]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::where('id',$id)->firstOrFail();
        $producto->delete();
    }
}
