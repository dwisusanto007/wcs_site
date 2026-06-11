<?php

namespace App\Http\Controllers;

use App\Models\AlliancePartner;
use App\Models\Client;
use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
    public function index(Request $request): View
    {
        $services = Service::active()->ordered()->get()->groupBy('category');
        $clients = Client::active()->ordered()->get();
        $partners = AlliancePartner::active()->ordered()->get();

        $seo = [
            'title' => 'WCS - PT Wahana Ciptasinatria | System Integrator IT Indonesia',
            'description' => __('home.hero_description'),
            'keywords' => 'WCS, PT Wahana Ciptasinatria, system integrator, IT Indonesia, network infrastructure, security solutions',
            'og_image' => asset('images/logo_wcs.png'),
        ];

        return view('pages.home', compact('services', 'clients', 'partners', 'seo'));
    }
}
