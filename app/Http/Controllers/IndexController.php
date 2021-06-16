<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;


class IndexController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function bukti(Request $request)
    {
        dd($request);
        return view("bukti");
    }
}
