<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function categories()
    {
        return view('pages.categories');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function faqs()
    {
        return view('pages.faqs');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function destroy_advert()
    {
        return view('pages.destroy_advert');
    }
}
