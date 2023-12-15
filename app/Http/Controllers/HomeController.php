<?php

namespace App\Http\Controllers;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $visitorsAndPageViews       = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $totalVisitorsAndPageViews  = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
        $mostVisitedPages           = Analytics::fetchMostVisitedPages(Period::days(7));
        $topReferrers               = Analytics::fetchTopReferrers(Period::days(7));
        $userTypes                  = Analytics::fetchUserTypes(Period::days(7));
        $topBrowsers                = Analytics::fetchTopBrowsers(Period::days(7));

        $totalViews=0;
        $allvisitors=Analytics::fetchVisitorsAndPageViews(Period::years(8));
        foreach ($allvisitors as $key => $value) {
            $totalViews+=$value['screenPageViews'];
        }


        return view('welcome', compact('visitorsAndPageViews', 'totalVisitorsAndPageViews', 'mostVisitedPages', 'topReferrers', 'userTypes', 'topBrowsers','totalViews'));
    }
}
