<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index(): View
    {
        $seo = [
            'title' => __('contact.hero_title') . ' | PT WAHANA CIPTASINATRIA',
            'description' => __('contact.hero_description'),
            'keywords' => 'contact, WCS, PT Wahana Ciptasinatria, hubungi kami',
        ];

        return view('pages.contact', compact('seo'));
    }

    /**
     * Handle contact form submission.
     */
    public function store(ContactFormRequest $request): RedirectResponse
    {
        try {
            ContactMessage::create($request->validated() + ['locale' => app()->getLocale()]);

            return back()->with('success', __('contact.success_message'));
        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage(), [
                'email' => $request->input('email'),
                'exception' => $e,
            ]);

            return back()->with('error', __('contact.error_message'))->withInput();
        }
    }
}
