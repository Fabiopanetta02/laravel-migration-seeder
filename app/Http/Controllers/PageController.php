<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    //HOME
    public function index()
    {
        return view('home'); 
    }

    //ABOUT
    public function about()
    {
        return view('about'); 
    }

    //CONTACTS
    public function contacts()
    {
        return view('contacts'); 
    }
}
