<?php

namespace Alientronics\FleetanyWebPages\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;

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
        $availableLanguages = $this->getAvailableLanguages();
        if (!array_key_exists($lang, $availableLanguages)) {
            $lang = 'en';
        }

        return redirect()->back()->withCookie(cookie('webPagesLang', $lang, 60));
    }

    private function getAvailableLanguages()
    {
        $languages = [];
        $directories = File::directories(base_path() . DIRECTORY_SEPARATOR .
                            'resources' . DIRECTORY_SEPARATOR . 'lang');
        
        foreach ($directories as $directory) {
            $lang = explode(DIRECTORY_SEPARATOR, $directory);
            $lang = end($lang);
            $languages[$lang] = Lang::get('general.' . $lang);
        }
        return $languages;
    }
}
