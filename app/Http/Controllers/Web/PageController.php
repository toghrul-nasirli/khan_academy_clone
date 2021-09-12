<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Supporter;

class PageController extends Controller
{
    public function index()
    {
        $keySupporters = Supporter::where('covid_19', '0')->get();
        $covid_19ResponseSupporters = Supporter::where('covid_19', '1')->get();
        
        return view('front.index', compact('keySupporters', 'covid_19ResponseSupporters'));
    }
}
