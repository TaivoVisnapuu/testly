<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="<?=ASSETS_URL?>css/normalize.css">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<script src="<?=ASSETS_URL?>js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?=ASSETS_URL?>js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<script src="<?=ASSETS_URL?>js/plugins.js"></script>
	<script src="<?=ASSETS_URL?>js/main.js"></script>
	<script>BASE_URL='<?=BASE_URL?>'</script>
	<?if(! empty($this->scripts)) :  ?>
		<? foreach($this->scripts as $script) : ?>
			<script src="<?=ASSETS_URL?>js/<?=$script?>" ></script>
		<?endforeach?>
	<?endif?>
	<style>body {
			padding-top: 60px;
		}

		html, body {
			background:url(<?=BASE_URL?>/assets/taust1.png)black center no-repeat fixed;
		}

		table.table-bordered tr {
			background-color: lightgray;
		}

		table.table-bordered th {
			background-color: darkgray;
		}
	</style>
</head>


<body>
<center>

<div class="navbar navbar-inverse navbar-fixed-top" id="navBar" style="opacity: 0.8">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="active"><a href="<?= BASE_URL ?>tests">Testid</a></li>
					<li><a href="/views/info.html" onclick="Popup=window.open('/testly/views/info.html', 'Popup','toolbar=no, ' +
						 'location=no,' +
						 'status=no,' +
						 'menubar=no,scrollbars=yes, width=420,height=400,left=430,' +
						  'top=23'); return false;">
							Info</a></li>
					<li><a href="<?= BASE_URL ?>auth/logout">Logi välja</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>
</center>
<div id="myModal" class="modal hide fade">
	<!-- dialog contents -->
	<div class="modal-body">Infooooooooo</div>
	<!-- dialog buttons -->
	<div class="modal-footer"><a href="#" class="btn primary">OK</a></div>
</div>
<div class="container-fluid">

	<?php

	require 'views/'.$request->controller.'_'.$request->action.'_view.php';
	?>
</div>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
	browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your
	experience.</p>
<![endif]-->

<!-- Add your site or application content here -->


</body>
</html>
