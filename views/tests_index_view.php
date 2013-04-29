
<center>
<div>
<p>
	<a class="btn btn-inverse" href="#" id="add_test">Lisa uus test<i class="icon-white icon-play" ></i></a>
</p>

<table id="tests-table" class="table table-bordered table-stripe" style="opacity: 0.8; width:730px">
	<thead>
	<tr>
		<th>Nimi</th>
		<th>Koostaja</th>
		<th>Aeg</th>
		<th>Tegevused</th>
	</tr>
	</thead>
	<tbody>
	<? if(!empty($tests)): foreach($tests as $test):  ?>
		<tr id="test<?=$test['test_id']?>">
			<td><?=$test['name']?></td>
			<td><?=$test['username']?></td>
			<td><?=substr($test['date'], 0, 10)?></td>
			<td>
				<a href="<?=BASE_URL?>tests/edit/<?=$test['test_id']?>">Vaata<i class="icon-pencil"></i></a>

				<?if(!empty($status) && $status == 'teacher'):?>

				<a href="#" onclick="if(!confirm('Oled kindel?')) return false;
				remove_test_ajax(<?=$test['test_id']?>); return false">
				<i class="icon-trash"></i>Kustuta</a>
				<?endif?>
			</td>

		</tr>
	<? endforeach; endif?>
	</tbody>
</table>
<link rel="stylesheet" type="text/css" href="<?=ASSETS_URL?>css/jquery.confirm.css" />
	<div class="item" style="display: none">
		<div class="delete"></div>
	</div>
</center>