<?php

namespace App\Http\Controllers;

use App\Articulo;
use Datatables;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('producto');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Articulo::query())->make(true);
    }
}
