
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Logi sisse &middot; Testly</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="<?=ASSETS_URL?>assets/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			max-width: 300px;
			padding: 19px 29px 29px;
			margin: 0 auto 20px;
			background-image:url(<?=ASSETS_URL?>assets/mac-os-x-linen-wallpaper.jpg);
			border: 1px solid darkgray;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			box-shadow: 0 1px 2px rgba(0,0,0,.05);
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.form-signin input[type="text"],
		.form-signin input[type="password"] {
			font-size: 16px;
			height: auto;
			margin-bottom: 15px;
			padding: 7px 9px;
		}

	</style>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="/assets/js/html5shiv.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=ASSETS_URL?>assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=ASSETS_URL?>assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=ASSETS_URL?>assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?=ASSETS_URL?>assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?=ASSETS_URL?>assets/ico/favicon.png">
</head>

<body style="background-image:url(<?=BASE_URL?>assets/low_contrast_linen.png); color: white; text-shadow: 3px 1px 3px black">


<div class="container">

	<form class="form-signin" method="post" style="background-image:url(<?=BASE_URL?>assets/mac-os-x-linen-wallpaper.jpg)">
		<h2 class="form-signin-heading">Logige sisse!</h2>
		<input name="username" type="text" class="input-block-level" placeholder="Kasutajanimi">
		<input name="password" type="password" class="input-block-level" placeholder="Parool">
		<label class="checkbox">
			<input type="checkbox" value="remember-me"> Hoia meeles!
		</label>
		<button class="btn btn-large btn-inverse" type="submit">Logi sisse</button>
	</form>

</div> <!-- /container -->


</body>
</html>
