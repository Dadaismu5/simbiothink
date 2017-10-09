<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
  public function create()
  {
    $title = 'Contacto';
    return view('page.contacto')->with('title', 'Contacto');
  }
  public function store(ContactFormRequest $request)
  {

      \Mail::send('emails.contacto',
          array(
              'name' => $request->get('name'),
              'email' => $request->get('email'),
              'user_message' => $request->get('message')
          ), function($message)
      {
          $message->from('contacto@simbiothink.com');
          $message->to('contacto@simbiothink.com', 'Admin')->subject('Mensaje desde el sitio web de Simbiothink');
      });

    return \Redirect::route('/contacto')->with('message', 'Su mensaje se ha enviado, gracias por contactarnos.');

  }
}
