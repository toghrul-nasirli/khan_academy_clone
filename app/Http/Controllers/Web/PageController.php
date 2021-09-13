<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Supporter;
use App\Models\Work;

class PageController extends Controller
{
    public function index()
    {
        /**
         * Statik yazıları db-də saxlayanda 1 column-dan istifadə edirəm.
         * Pluck ilə id-yə görə arraya halına salıb hər bir datanı fronta çıxardıram.
         * Admin paneldə də dropdown ilə hər bölməyə uyğun dataları göstərirəm.
         * Ancaq vaxt tapa bilmədiyimdən onları yazmadım. Eyni zamanda dizaynda da bəzi yerləri sadə tutdum.
         * 
         * Normalda Admin Paneldə Livewire-dan istifadə edərək filterizasiya yazıram. Ancaq yenə vaxta görə sadə tutdum.
         * Böyük proyektlərdə isə Repository patterndən istifadə edirəm. Burda WorkController-də nümunə üçün yazım.
         */

        $keySupporters = Supporter::where('covid_19', '0')->get();
        $covid_19ResponseSupporters = Supporter::where('covid_19', '1')->get();
        $works = Work::all();

        return view('front.pages.index', compact('works', 'keySupporters', 'covid_19ResponseSupporters'));
    }
}
