<?php
namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

/**
* Controller to change language
*/
class LocalizationController extends Controller {
    public function index($locale){
    	// set the laravel app local and set it in session for further use
        App::setlocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
} 