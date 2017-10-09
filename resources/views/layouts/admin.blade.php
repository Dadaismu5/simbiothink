<!DOCTYPE html>
<html>
	<head>
		<title>{{ config('app.name', 'Laravel') }} | Admin</title>
		<meta charset="utf-8">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<meta content="template language" name="keywords">
		<meta content="Native Theme" name="author">
		<meta content="Admin Template" name="description">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link href="favicon.png" rel="shortcut icon">
		<link href="apple-touch-icon.png" rel="apple-touch-icon">

		<link rel="stylesheet" href="/assets/plugins/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/plugins/animate/animate.css">
		<link rel="stylesheet" href="/assets/plugins/select2/dist/css/select2.min.css">
		<link rel="stylesheet" href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css">
		<link rel="stylesheet" href="/assets/css/main.css"/>

		<script src="/assets/plugins/jquery/jquery-2.1.1.min.js"></script>
		<script src="/assets/plugins/jquery-count-to/jquery.countTo.js"></script>
		<script src="/assets/plugins/moment/min/moment.min.js"></script>
		<script src="/assets/plugins/select2/dist/js/select2.full.min.js"></script>
		<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="/assets/plugins/dropzone/dist/dropzone.js"></script>
	</head>
	<body>
		<div class="wrapper">
    	@yield('content')
		</div>
  </body>
</html>
