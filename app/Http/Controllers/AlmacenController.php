<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Producto;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos);
        
}
}