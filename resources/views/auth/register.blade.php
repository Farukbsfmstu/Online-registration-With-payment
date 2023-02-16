
<!DOCTYPE html>
<html>
<head>
<title> SignUp </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/Resis.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1> SignUp </h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{ route('register') }}" method="post">
					<input class="text" type="text" name="name" id="name" :value="old('name')" placeholder="Username" required="">
					<input class="text email" type="email" name="email" id=email placeholder="Email" required="">
					<input class="text" type="password" name="password" id= "password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" id="password" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
                    <button class="btn btn-block btn-primary"> {{ __('Log in') }}</button>
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2023  CSE Department BSFMSTU. All rights reserved | Design by <a href=" #" target="_blank">CSE</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>