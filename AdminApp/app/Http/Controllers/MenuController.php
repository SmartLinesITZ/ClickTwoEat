<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriaFormRequest;

class MenuController extends Controller
{
  public function __construct()
  {

  }
  public function index()
  {
    if ($request)
    {
        $query=trim($request->get('searchText'));
        $platillos=DB::table('platillo as p')->where('nombreplatillo','LIKE','%'.$query.'%')
        ->join('restaurante as r', 'p.idrestaurante',"=","r.idrestaurante")
        ->select('a.id','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.imagen','a.estado')
        ->paginate(7);
        return view('almacen.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);
    }
  }

  public function create()
  {
    return view("adminrest.menu.create",[]);
  }


  public function store(Request $request)
  {

  }


  public function show($id)
  {
      //
  }


  public function edit($id)
  {
      //
  }


  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
}
