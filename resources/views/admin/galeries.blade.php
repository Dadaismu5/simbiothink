@extends('layouts.admin')
@section('content')
@include('admin.asideadmin')
<section class="main">
  <div class="content">
    <div class="panel">
      <div class="content-header no-mg-top">
        <i class="fa fa-newspaper-o"></i>
        <div class="content-header-title">Proyectos</div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="content-box">
            <div class="table-responsive">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th class="text-center"><input type="checkbox"></th>
                    <th>Nombre de proyecto</th>
                    <th class="text-center">Imagen Principal</th>
                    <th class="text-center">Galería</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($albums as $album)
                  <tr>
                    <th class="text-center"><input type="checkbox"></th>
                    <td class="nowrap">{{$album->name}}</td>
                    <td class="text-center">
                      <img src="/img/{{$album->cover_image}}"/ style="max-width:100px">
                    </td>
                    <td class="text-center">
                      <span onClick="location.href='addimage/{{$album->id}}'" class="badge badge-yellow">Agregar o editar</span>
                    </td>
                    <td class="text-center"><i onClick="location.href='addimage/{{$album->id}}'" class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>
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
