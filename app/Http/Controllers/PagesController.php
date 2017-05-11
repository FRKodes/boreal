<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return View('pages.index');
    }

    public function economicos()
    {
    	return View('pages.economicos');
    }

    public function ecologicos()
    {
    	return View('pages.ecologicos');
    }

    public function seguridad()
    {
    	return View('pages.seguridad');
    }

    public function inversion()
    {
    	return View('pages.inversion');
    }

    public function contacto()
    {
    	return View('pages.contacto');
    }

    public function gnv()
    {
        return View('pages.gnv');
    }
}
