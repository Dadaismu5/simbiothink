@extends('layouts.admin')
@section('content')
  <div class="auth-wrapper">
    @if (count($errors) > 0)
              <div class="alert alert-danger alert-dismissible text-center">
								Por favor corrige los siguientes errores:<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
              </div>
    @endif
			<div class="auth-header">
				<div class="auth-title">
				  <img style="max-width:100px;margin:0 auto;display: block" src="/img/appeal.png" alt="">
				</div>
			</div>
      <form class="" id="login" role="form" action="/login" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
  			<div class="auth-body">
  				<div class="auth-content">
  					<div class="form-group">
  						<label for="">Email</label>
  						<input class="form-control" name="email" placeholder="Ingrese su email" type="email">
  					</div>
  					<div class="form-group">
  						<label for="">Password</label>
  						<input class="form-control" name="password" placeholder="Contraseña" type="password">
  					</div>
  				</div>
  				<div class="auth-footer">
  					<button class="btn btn-primary submit">Login</button>
  					<div class="pull-right auth-link">
  						<label class="check-label"><input type="checkbox"> Recuérdame</label>
  					</div>
  				</div>
  			</div>
      </form>
		</div>
@endsection
