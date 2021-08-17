<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{url('public/User/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{url('public/User/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{url('public/User/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{url('public/User/css/font.css')}}" type="text/css"/>
<link href="{{url('public/User/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{url('public/User/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	@if(Session::has('RegisterSuccess'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ Session::get('RegisterSuccess') }}</strong>                                                     
	</div>
	@endif
	@if(Session::has('FaieldMassege'))
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ Session::get('FaieldMassege') }}</strong>                                                     
	</div>
	@endif	

	<h2>Login Now</h2>
		<form action="{{url('/logincheck')}}" method="post">
		@csrf
			<input type="email" class="ggg" name="user_id" placeholder="USER ID" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<!-- <span><input type="checkbox" />Remember Me</span> -->
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Don't Have an Account ?<a href="{{route('user.signup.from')}}">Create an account</a></p>
</div>
</div>
<script src="{{url('public/User/js/bootstrap.js')}}"></script>
<script src="{{url('public/User/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{url('public/User/js/scripts.js"></script>
<script src="{{url('public/User/js/jquery.slimscroll.js"></script>
<script src="{{url('public/User/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{url('public/User/js/jquery.scrollTo.js"></script>
</body>
</html>
