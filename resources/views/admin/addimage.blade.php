@extends('layouts.admin')
@section('content')
@include('admin.asideadmin')
<section class="main">
  <div class="content">
    <div class="panel">
      <div class="content-header no-mg-top">
        <i class="fa fa-newspaper-o"></i>
        <div class="content-header-title">Añade una imagen a <b>{{ $album->name }}</b></div>
      </div>
        <div class="container" style="text-align: center;">
          <div class="span4" style="display: inline-block;margin-top:100px;">
            @if(isset($errors) && $errors->has(''))
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
            <div class="col-md-12">
              <div class="content-box">
                <form name="addimagetoalbum" method="POST" action="{{URL::route('add_image_to_album')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <input type="hidden" name="album_id"value="{{$album->id}}" />
                <fieldset>
                  <legend>Añade una imagen a {{$album->name}}</legend><br>
                  <div class="form-group">
                    <label for="image">Selecciona una imagen:&nbsp</label>
                    {{Form::file('image')}}
                  </div>
                  <button type="submit" class="btn btn-primary">Subir</button>
                </fieldset>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /container -->
@endsection
