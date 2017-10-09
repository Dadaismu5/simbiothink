<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Image;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Validator;

  class ImageController extends Controller
  {
    public function getAlbum($id)
    {
        $album = Album::with('Photos')->find($id);
        $albums = Album::with('Photos')->get();
        $title = Album::all();
        //dd($album);
        return view('page.vista-proyecto', ['album'=>$album, 'albums'=>$albums])->with('title', $album->name);
        //->with('album',$album);
    }

    public function getForm($id)
    {
      $album = Album::find($id);
      return view('admin.addimage')
      ->with('album',$album);
    }

    public function postAdd(Request $request)
    {
      $rules = [
        'album_id' => 'required|numeric|exists:albums,id',
        'image'=>'required|image'
      ];

      $input = ['album_id' => null];

      $validator = Validator::make($request->all(), $rules);
      if($validator->fails()){
          return redirect()->route('galeries', ['id' => $request->get('album_id')])->withErrors($validator)->withInput();
      }

      $file = $request->file('image');
      $random_name = str_random(8);
      $destinationPath = 'img/';
      $extension = $file->getClientOriginalExtension();
      $filename=$random_name.'_album_image.'.$extension;
      $uploadSuccess = $request->file('image')->move($destinationPath, $filename);
      Image::create(array(
        'image' => $filename,
        'album_id'=> $request->get('album_id')
      ));

      return redirect()->route('admin.dashboard',['id'=>$request->get('album_id')]);
    }

  public function getDelete($id)
  {
    $image = Image::find($id);
    $image->delete();
    return redirect()->route('admin.dashboard',['id'=>$image->album_id]);
  }

  public function postMove(Request $request)
  {
  $rules = array(
    'new_album' => 'required|numeric|exists:albums,id',
    'photo'=>'required|numeric|exists:images,id'
  );
  $validator = Validator::make($request->all(), $rules);
  if($validator->fails()){
    return redirect()->route('admin.dashboard');
  }
  $image = Image::find($request->get('photo'));
  $image->album_id = $request->get('new_album');
  $image->save();
  return redirect()->route('admin.show_album', ['id'=>$request->get('new_album')]);
  }
}
