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
        <form name="createnewalbum" method="POST"action="{{route('create_album')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
          <fieldset>
            <h2>Crear un nuevo albúm</h2>
            <br></br>
            <div class="form-group">
              <label for="name">Nombre del proyecto</label>
              <input name="name" type="text" class="form-control" placeholder="Nombre del proyecto" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
              <label for="description">Descripción del proyecto</label>
              <textarea name="description" rows="10" cols="50" type="text" class="form-control" placeholder="Descripción del proyecto" value="{{old('name')}}" required></textarea>
            </div>
            <div class="form-group">
              <label for="location">Locación:</label>
              <input name="location" type="text" class="form-control" placeholder="¿En dónde se hizo el proyecto?" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
              <label for="year">Año:</label>
              <input name="year" type="text" class="form-control" placeholder="¿En que año?" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
              <label for="cover_image">Seleccione una imagen principal: </label>
              {{Form::file('cover_image')}}
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
          </fieldset>
        </form>
      </div>
    </div> <!-- /container -->
@endsection
