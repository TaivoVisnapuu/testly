<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css"/>
<script>
	$(function () {
		$("#tabs").tabs();
	});
</script>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Üldine</a></li>
		<li><a href="#tabs-2">Proin dolor</a></li>
		<li><a href="#tabs-3">Aenean lacinia</a></li>
	</ul>
	<div id="tabs-1">
		<form method="post">
			<label>Küsimuse nimi</label>
			<input type="text" name="name" value="<?=$test['name']?>">
			<label>Sissejuhatus</label>
			<textarea name="introduction"><?=$test['introduction']?></textarea>
			<label>Kokkuvõte</label>
			<textarea name="conclusion"><?=$test['conclusion']?></textarea>
			<label>Passcode</label>
			<input type="text" name="passcode" value="<?=$test['passcode']?>">
		</form>
	</div>
	<div id="tabs-2">
	</div>
	<div id="tabs-3">
	</div>
</div>
