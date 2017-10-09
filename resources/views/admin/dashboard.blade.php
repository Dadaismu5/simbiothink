@extends('layouts.admin')
@section('content')
  @include('admin.asideadmin')
  <section class="main">
  <div class="top-banner">
    <div class="top-banner-title">Panel de control</div>
    <div class="top-banner-subtitle">Bienvenido(a), {{ Auth::user()->name }}.</div>
  </div>
  @if (isset($errors) && $errors->has(''))
  <div class="alert alert-block alert-error fade in"id="error-block">
     <?php
     $messages = $errors->all('<li>:message</li>');
    ?>
    <button type="button" class="close"data-dismiss="alert">×</button>

    <h4>¡Ocurrió un error!</h4>
    <ul>
      @foreach($messages as $message)
        {{$message}}
      @endforeach
    </ul>
  </div>
  @endif
  <div class="content no-top-banner">
    <div class="panel">
      <div class="row">
        <div class="col-md-4">
          <div class="content-header">
            <i class="fa fa-newspaper-o"></i>
            <div class="content-header-title">Nuevas imágenes</div>
          </div>
          <div class="content-box">
            <div class="donut-chart-wrapper">
              <canvas width="120" height="120" id="donut-chart"></canvas>
              <div class="donut-chart-label">
                <div class="donut-chart-value">{{$albums->count()}}</div>
                <div class="donut-chart-title">Albums</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="content-header">
            <i class="fa fa-newspaper-o"></i>
            <div class="content-header-title">Proyectos</div>
          </div>
          <div class="content-box">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nombre del proyecto</th>
                    <th class="text-center">Imagen</th>
                    <th class="text-right">Galería</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($albums as $album)
                    <tr>
                      <td class="nowrap">{{ $album->name }}</td>
                      <td class="text-center"><img class="image-table" src="/img/{{$album->cover_image}}"></td>
                      <td class="text-right">
                        <a href="/addimage/{{$album->id}}">Agregar galería</a>
                      </td>
                      <td class="text-center">
                        <a href="/editalbum/{{$album->id}}">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a href="/deletealbum/{{$album->id}}">
                      <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
