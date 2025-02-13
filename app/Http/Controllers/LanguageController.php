<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function __invoke(Request $request,string $locale) {
        info("languageController locale -$locale-");
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
