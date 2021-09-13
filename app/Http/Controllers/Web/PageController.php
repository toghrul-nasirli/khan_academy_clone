<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Supporter;
use App\Models\Work;

class PageController extends Controller
{
    public function index()
    {
        $keySupporters = Supporter::where('covid_19', '0')->get();
        $covid_19ResponseSupporters = Supporter::where('covid_19', '1')->get();
        $works = Work::all();

        return view('front.index', compact('works', 'keySupporters', 'covid_19ResponseSupporters'));
    }
}
