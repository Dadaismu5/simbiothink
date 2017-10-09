<?php
namespace App\Http\Controllers;
use App\Album;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index(){
    $albums = Album::all();
    return view('admin.dashboard')->with('albums',$albums);
  }
}
