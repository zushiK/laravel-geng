<?php

namespace App\Http\Controllers\Operator;

use App\Enums\Prefecture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('operator.index');
    }

    public function pref()
    {
        $pref_list = Prefecture::toArray();
        // dd($pref_list);
        return response()->json(array('prefArray' => $pref_list));
    }

    public function prefname($prefname)
    {
        $pref_name = '';
        $pref_list = Prefecture::toArray();
        dd($pref_list);
        return response()->json(array('prefName' => $pref_name));
    }
}
