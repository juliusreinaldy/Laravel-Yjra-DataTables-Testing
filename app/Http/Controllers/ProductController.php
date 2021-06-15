<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use DataTables;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function json(){
        return Datatables::of(products::all())->make(true);
    }

    public function index(){
        return view('listProduct');
    }

    public function reporting(){

      
        return view('reports');
    }
}
