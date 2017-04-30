<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriaFormRequest;

class PedidoController extends Controller
{
  public function __construct()
  {

  }
  public function index()
  {
      return view("adminrest.pedidos.index",[]);
  }


  public function create()
  {
       return view("adminrest.pedidos.create",[]);
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
