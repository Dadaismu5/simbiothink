<?php

Route::get('/', function () {
    $title = 'Inicio';
    return view('page.index')->with('title', 'Inicio');
});
Route::get('/nosotros', function() {
  $title = 'Nosotros';
	return view('page.nosotros')->with('title', 'Nosotros');
});



// Route::get('/contacto', function() {
// 	return view('page.contacto');
// });

Route::get('/contacto',
  ['as' => '/contacto', 'uses' => 'ContactController@create']);
Route::post('/contacto',
  ['as' => '/contact_store', 'uses' => 'ContactController@store']);

Route::get('/ album/{id}', array('as' => 'show_album','uses' => 'ImageController@getAlbum'));

Route::get('/mail/*');

Auth::routes();

//Route::get('/admin', 'AdminController@index');
//AdminGallery
Route::get('/admin', array('as' => 'admin.dashboard','uses' => 'AdminController@index'));
Route::get('/proyectos', 'AlbumController@projects');
Route::get('/vista-proyecto', 'ImageController@show_projects');
//Route::get('/galeries', 'AlbumController@view_projects');
Route::get('/galeries', array('as' => 'galeries','uses' => 'AlbumController@view_projects'));


Route::get('/createalbum', array('as' => 'create_album_form','uses' => 'AlbumController@getForm'));
Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumController@postCreate'));

Route::get('/editalbum/{id}', array('as' => 'edit_album_form','uses' => 'AlbumController@formEdit'));
Route::post('/edit_album', array('as' => 'edit_album','uses' => 'AlbumController@postEdit'));

Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumController@getDelete'));
Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumController@getAlbum'));
Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));
Route::post('/moveimage', array('as' => 'move_image', 'uses' => 'ImageController@postMove'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
