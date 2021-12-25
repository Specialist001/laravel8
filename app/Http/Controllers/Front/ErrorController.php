<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function notFound()
    {
        return view('site.errors.404');
    }
}
