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
        return view('fleetany-web-pages::tos');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function privacy()
    {
        return view('fleetany-web-pages::privacy');
    }
}
