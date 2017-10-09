@extends('layouts.master')
@section('content')
<div></div>
<div id="pag-contacto">
  @if(Session::has('message'))
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>{{Session::get('message')}}</strong>
    </div>
  @endif
  <div class="fluid-container contact-bg">
    <div class="row">
      <div class="col-md-12">
        <h1 class="wow fadeIn" data-paroller-factor="0.25" data-paroller-type="foreground" data-wow-duration="2s" data-wow-delay=".6s"> Contacto </h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 hidden-md-down">
        <div class="info" data-paroller-factor="0.6" data-paroller-type="foreground">
          <h2> ESCRÍBENOS </h2>
          <div class="data-contact">
            <i class="fa fa-mobile white-icons"></i>&nbsp; (462) 599 1010 &nbsp;&nbsp;
            <i class="fa fa-envelope white-icons"></i>&nbsp; contacto@simbiothink.com&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.facebook.com/simbiothink"<i class="fa fa-facebook-square white-icons"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="https://www.instagram.com/simbiothink"><i class="fa fa-instagram white-icons"></i></a>
          </div>
        </div>
        <img class="responsive-img outline-back" src="img/simbiothink-outline.svg" data-paroller-factor="0.7" data-paroller-type="foreground">
      </div>
    <div class="col-md-6 col-sm-12">
        <ul>
          @foreach($errors->all() as $error)
            <div class="alert alert-info">
              {{ $error }}
            </div>
          @endforeach
        </ul>
      <form id="forma-contacto" method="post" action="{{ route('/contact_store')}}">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
          <div class="form-group inputsimbio row">
            <div class="col-md-12">
              <input type="name" name="name" class="form-control campo" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group inputsimbio row">
            <div class="col-md-6">
              <input type="email" name="email" class="form-control campo" placeholder="E-mail">
            </div>
            <div class="col-md-6">
              <input type="text" name="phone" class="form-control campo" placeholder="Teléfono">
            </div>
          </div>
          <div class="form-group inputsimbio row">
            <div class="col-md-12">
              <textarea rows="3" name="message" class="form-control campo" placeholder="Mensaje"></textarea>
            </div>
          </div>
          <button>Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
