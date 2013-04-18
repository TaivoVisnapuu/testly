<p>
	<a class="btn btn-inverse" href="http://www.google.com">Lisa uus test<i class="icon-white icon-play"></i></a>
</p>
<table id="tests-table" class="table table-bordered table-stripe">
	<thead>
		<th>Nimi</th>
		<th>Koostaja</th>
		<th>Aeg</th>
		<th>Tegevused</th>
	</thead>
	<tbody>
	<? if(!empty($tests)): foreach($tests as $test):  ?>
		<tr id="test<?=$test['test_id']?>">
			<td><?=$test['name']?></td>
			<td><?=$test['username']?></td>
			<td><?=$test['date']?></td>
			<td><?="vaata"?><i class="icon-pencil"></i></td>
		</tr>
	<? endforeach; endif?>
	</tbody>
</table>