@extends('layouts.master-projects-view')
@section ('content')
<div id="vista-proyecto" class="container-fluid wrapper-md">
  <div class="botones">
    <a href="/proyectos" class="ctrl-gal salir">
      <i class="fa fa-times" aria-hidden="true"></i>
    </a>
    <a class="ctrl-gal prev" id="previous">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </a>
    <a class="ctrl-gal next" id="next">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </a>
  </div>

  <div id="bullets">
    <ul>  </ul>
  </div>

  <button type="button" class="btn btn-project wow pulse" data-wow-duration="2s" data-wow-delay="1s" data-wow-iteration="10" data-toggle="collapse" data-target="#info-project">VER INFORMACIÓN</button>
  <div id="info-project" class="collapse wow fadeIn">
    <div class="informacion wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
      <button id="close" class="collapse close-info">x</button>
      <h1>{{$album->name}}</h1>
      <p>Localización: {{$album->location}}</p>
      <p>Año: {{$album->year}}</p>
      <p class="desc">
        {{$album->description}}
      </p>
      <a href="{{$album->id - 1}}" class="btn-proyecto izq">
        <i class="fa fa-chevron-left"></i>
        Anterior
      </a>
      <a href="{{$album->id + 1}}" class="btn-proyecto der">
        Siguiente
        <i class="fa fa-chevron-right"></i>
      </a>
    </div>
  </div>
</div>
@endsection
