<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the about page.
     */
    public function index(): View
    {
        $seo = [
            'title' => __('about.meta_title'),
            'description' => __('about.meta_description'),
            'keywords' => app()->getLocale() === 'id'
                ? 'PT Wahana Ciptasinatria, WCS, penyedia solusi TI Indonesia, system integrator, infrastruktur jaringan, solusi keamanan, ERP, layanan cloud, transformasi digital'
                : 'PT Wahana Ciptasinatria, WCS, IT solution provider Indonesia, system integrator, network infrastructure, security solutions, ERP, cloud services, digital transformation',
            'og_image' => asset('images/about-us.png'),
        ];

        return view('pages.about', compact('seo'));
    }
}
