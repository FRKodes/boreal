<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Support\Facades\Input as Input;
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

	public function quienes_somos()
	{
		return View('pages.quienes-somos');
	}

	public function contacto()
	{
		return View('pages.contacto');
	}

	public function sendmail()
	{
		Mail::send('emails.contacto-email', [], function($message){
			$message->to('tony@blueterrier.mx', 'BOREAL Gas')->subject('Contacto desde borealgas.com');
		});
	}

	public function quotation()
	{
		Mail::send('emails.quotation-email', [], function($message){
			$message->to('tony@blueterrier.mx', 'BOREAL Gas')->subject('Cotización BOREAL Gas');
		});
	}

	public function gnv()
	{
		return View('pages.gnv');
	}

	public function faq()
	{
		return View('pages.faq');
	}
}
