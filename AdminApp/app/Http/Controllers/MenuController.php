<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriaFormRequest;
use App\Platillo;
use Illuminate\Support\Facades\Redirect;
use DB;
class MenuController extends Controller
{
  public function __construct()
  {

  }
  public function index()
  {
    $platillos= Platillo::all();
     return view('adminrest.menu.index',["platillos"=>$platillos]);
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
