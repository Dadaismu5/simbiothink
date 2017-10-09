@extends('layouts.admin')
@section('content')
@include('admin.asideadmin')
    <div class="container" style="text-align: center;">
      <div class="span4" style="display: inline-block;margin-top:100px;">
        @if (isset($errors) && $errors->has(''))
          <div class="alert alert-block alert-error fade in"id="error-block">
             <?php
             $messages = $errors->all('<li>:message</li>');
            ?>
            <button type="button" class="close"data-dismiss="alert">×</button>

            <h4>Warning!</h4>
            <ul>
              @foreach($messages as $message)
                {{$message}}
              @endforeach
            </ul>
          </div>
        @endif
        <form name="editalbum" action="{{ action('AlbumController@postEdit', $album->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <fieldset>
            <h2>Editar <strong>{{$album->name}}</strong></h2>
            <br></br>
            <div class="form-group">
              <label for="name">Nombre del proyecto</label>
              <input name="name" type="text" class="form-control" value="{{ $album->name }}" required>
            </div>
            <div class="form-group">
              <label for="description">Descripción del proyecto</label>
              <textarea name="description" rows="10" cols="50" type="text" class="form-control" value="{{ $album->description }}" required></textarea>
            </div>
            <div class="form-group">
              <label for="location">Locación:</label>
              <input name="location" type="text" class="form-control" value="{{ $album->location }}" required>
            </div>
            <div class="form-group">
              <label for="year">Año:</label>
              <input name="year" type="text" class="form-control" value="{{ $album->year }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
          </fieldset>
        </form>
      </div>
    </div> <!-- /container -->
@endsection
