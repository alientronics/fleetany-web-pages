<?php

namespace Alientronics\FleetanyWebPages\Controllers;

use App\Http\Controllers\Controller;


/**
 * Class PageController
 * @package Alientronics\FleetanyWebPages\Controllers
 */
class PageController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function tos()
    {
        return view('fleetany-web-pages::termsofservice');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function privacy()
    {
        return view('fleetany-web-pages::privacy');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('fleetany-web-pages::home');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('fleetany-web-pages::about');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        return view('fleetany-web-pages::pricing');
    }
}
