<?php

namespace Alientronics\FleetanyWebPages\Controllers;

use App\Http\Controllers\Controller;
use App\Entities\User;
use Illuminate\Http\Request;

/**
 * Class PageController
 * @package Alientronics\FleetanyWebPages\Controllers
 */
class PageController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function tos(Request $request)
    {
        $this->getLang($request);
        return view('fleetany-web-pages::termsofservice');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function privacy(Request $request)
    {
        $this->getLang($request);
        return view('fleetany-web-pages::privacy');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function home(Request $request)
    {
        $this->getLang($request);
        return view('fleetany-web-pages::home');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about(Request $request)
    {
        $this->getLang($request);
        return view('fleetany-web-pages::about');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function pricing(Request $request)
    {
        $this->getLang($request);
        return view('fleetany-web-pages::pricing');
    }

    private function getLang(Request $request)
    {
        app()->setLocale($request->cookie('webPagesLang'));
    }

    public function setLang($lang)
    {
        $user = new User();
        $availableLanguages = $user->getAvailableLanguages();
        if (!array_key_exists($lang, $availableLanguages)) {
            $lang = 'en';
        }

        return redirect()->back()->withCookie(cookie('webPagesLang', $lang, 60));
    }
}
