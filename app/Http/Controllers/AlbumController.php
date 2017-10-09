<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Alert;
use App\Album;
use App\Image;
use Illuminate\Support\Facades\Redirect;

class AlbumController extends Controller
{
  public function projects() {
    $albums = Album::all();
    $title = 'Proyectos';
    return view ('page.proyectos')->with('albums',$albums)->with('title', 'Proyectos');
  }

  public function getAlbum($id)
  {
      $album = Album::with('Photos')->find($id);
      $albums = Album::with('Photos')->get();
      //dd($album);
      return view('projects.show', ['album'=>$album, 'albums'=>$albums]);
      //->with('album',$album);
  }

  public function getForm()
  {
      return view('admin.createalbum');
  }

  public function postCreate(Request $request)
  {
      $rules = ['name' => 'required', 'cover_image'=>'required|image'];
      $input = ['name' => null];
      $validator = Validator::make($request->all(), $rules);
      if($validator->fails()){
        // return Redirect::route('create_album_form') ;
        return redirect()->route('admin.create_album_form')->withErrors($validator)->withInput();
      }
      // $file = Input::file('cover_image');
      $file = $request->file('cover_image');
      $random_name = str_random(8);
      $destinationPath = 'img/';
      $extension = $file->getClientOriginalExtension();
      $filename=$random_name.'_cover.'.$extension;
      $uploadSuccess = $request->file('cover_image')->move($destinationPath, $filename);
      $album = Album::create(array(
        'name' => $request->get('name'),
        'description' => $request->get('description'),
        'location' => $request->get('location'),
        'year' => $request->get('year'),
        'cover_image' => $filename,
      ));
      return redirect()->route('admin.dashboard',['id'=>$album->id]);
  }

  //edit album
  public function formEdit($id){
    $album = Album::all();
    $album = Album::find($id);
    $data = array(
        'album'       => $album
      );
      return view('admin.editalbum', $data);
  }

  public function postEdit(Request $request, $id)
{
  $album = Album::find($id);
  //$album = Album::all();
      if(count($album) > 0){
          $album->name = Input::get('name');
          $album->description = Input::get('description');
          $album->year = Input::get('year');
          $album->location = Input::get('location');
          $album->save();
          //Alert::success('Se ha actualizado correctamente.');
          $albums = Album::all();
          return view('admin.dashboard')->with('albums',$albums);
          //return view('admin.dashboard');
      } else {
          Alert::error('No se pudo actualizar la galería.', 'Error');
          return view('galeries');
      }
}

  public function view_projects(){
    $albums = Album::all();
    return view('admin.galeries')->with('albums',$albums);
  }

  public function getDelete($id)
  {
      $album = Album::find($id);

      if ($album != null) {
        $album->delete();
        return redirect()->route('admin.dashboard')->with(['message'=> 'Successfully deleted!!']);
      }
      return Redirect::route('admin.dashboard');
  }
}
