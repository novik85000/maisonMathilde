<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{

    public function changeLocale($locale){
        session(['locale'=> $locale]);
        $currentLocale = App::getLocale();

        return redirect()-> back();
    }
}
