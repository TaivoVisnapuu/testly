<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css" />
<script>
	$(function() {
		$("#tabs").tabs();
	});
</script>
<div style="clear: both; margin: 15px 0">
	<a class="btn btn-large btn-inverse" href="<?=BASE_URL?>tests">Loobu</a>
	<button class="btn btn-large btn-primary" type="button" onclick="submit1()">Salvesta</button>
</div>

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Üldine</a></li>
		<li><a href="#tabs-2">Küsimused</a></li>
		<li><a href="#tabs-3">Raportid</a></li>
	</ul>
	<div id="tabs-1">
		<form method ="post">
			<p>Küsimuse nimi</p>
			<input type="text" name="name" value="<?$test['name']?>">
			<p>Sissejuhatus</p>
			<textarea name="Introduction" ><?=$test['introduction']?></textarea>
			<p>Kokkuvõte</p>
			<textarea name="Conclusion"><?=$test['conclusion']?></textarea>
			<p>Passcode</p>
			<input type="text" name="passcode" value="<?=$test['passcode']?>">
		</form>

	</div>
	<div id="tabs-2">
		<p>Küsimus</p>
		<textarea name="question_text" ><?=$question['question_text']?$question['question_text']:''?></textarea>
		<p>Tyyp</p>
		<select name="type_id" id="type_id" >
			<option value="1" >Tõene/väär</option>
			<option value="2" selected="selected" >Üks õige</option>
			<option value="3" >Mitu õiget</option>
			<option value="4" >Täida lünk</option>
		</select>
		<div id="answer-template" >
			<div id="type_id_1" class="answer-template">
				<p>Sisesta kaks vastust ja m2rgi 2ra õige vastus</p>
				<input type="radio" name="tf.correct" value="0" checked="checked">
				<p name="answer.0">Tõene</p>
				<input type="radio" name="tf.correct" value="1">
				<p name="answer.1">Väär</p>
			</div>
			<div id="type_id_2" class="answer-template">
				<p>Sisesta vastuse variandid ja märgi ära, milline variant on õige</p>
				<a href="#" onclick="return addMultipleChoice()">Lisa</a> / <a href="#" onclick="return removeMultipleChoice()
				">Eemalda</a> vastusevariant
				<div id="multiple-choice-option">
					<div class="answer-option">
						<input type="radio" name="mc.correct" value="0" checked="checked">
						<textarea name="mc.answer.0"></textarea>
					</div>
					<div class="answer-option">
						<input type="radio" name="mc.correct" value="1">
						<textarea name="mc.answer.1"></textarea>
					</div>
					<div class="answer-option">
						<input type="radio" name="mc.correct" value="2">
						<textarea name="mc.answer.2"></textarea>
					</div>
					<div class="answer-option">
						<input type="radio" name="mc.correct" value="3">
						<textarea name="mc.answer.3"></textarea>
					</div>
				</div>
			</div>
			<div id="type_id_3" class="answer-template">
				<p>Sisesta vastuse variandid ja märgi ära, millised variandid on õiged</p>
				<a href="#" onclick="return addMultipleResponse()">Lisa</a> / <a href="#" onclick="return
				removeMultipleResponse()">Eemalda</a> vastusevariant
				<div id="multiple-response-answer-option">
					<div class="answer-option">
						<input type="checkbox" name="mr.correct" value="1">
						<textarea name="mr.answer.0"></textarea>
					</div>
					<div class="answer-option">
						<input type="checkbox" name="mr.correct" value="1">
						<textarea name="mr.answer.1"></textarea>
					</div>
					<div class="answer-option">
						<input type="checkbox" name="mr.correct" value="1">
						<textarea name="mr.answer.2"></textarea>
					</div>
					<div class="answer-option">
						<input type="checkbox" name="mr.correct" value="1">
						<textarea name="mr.answer.3"></textarea>
					</div>
				</div>
			</div>
			<div id="type_id_4" class="answer-template">
				<p>Sisesta võimalikud vastuse variandid(Üks vastus ühte kasti)</p>
				<div id="fill-in-the-blank-answer-option">
					<div class="answer-option">
						<input type="checkbox" name="fitb.correct" checked="checked" disabled="true">
						<textarea name="fitb.answer.0"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="tabs-3">
		<input type="text" id="games" name="games" value="">
	</div>
	<div id="tabs-4"></div>
	<div style="clear: both; padding: 15px 0">
		<a tabindex="9" class="btn btn-large btn-inverse" href="<?=BASE_URL?>tests">Loobu</a>
		<input type="hidden" id="participants" name="participants" value="">
		<button tabindex="10" class="btn btn-large btn-primary" type="button" onclick="submit1()">Salvesta</button>
	</div>
</div>