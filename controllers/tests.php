<?php
//class tests
class tests
{

	//omistab $requires_authile väärtuse true. Määrab ära et selle controlleri puhul on nõutav sisselogimine.
	public $requires_auth = TRUE;
	//loob meetodi index.
	function index()
	{
		//kaasab javascripti
		$this->scripts[] = 'tests.js';
		global $request;
		global $_user;
		//omistab $tests muutujale väärtuseks SQL päringust tuleva vaste.
		$tests = get_all("SELECT * FROM test NATURAL JOIN user WHERE test.deleted=0");
		//omistab muutujale $id sisseloginud kasutaja sessiooni.(massiiv, mille ainsaks id'ks on user_id)
		$id = $_SESSION['user_id'];
		//omistab $status muutujale väärtuseks SQL päringust tuleva vaste.
		$status = get_one("SELECT status FROM user WHERE user_id = '$id'");

		require 'views/master_view.php';
	}
	//meetod remove
	function remove()
	{
		global $request;
		$id = $request->params[0];
		//omistab muutujale $result SQL päringu vaste tulemuse.
		$result = q("UPDATE test SET deleted=1 WHERE test_id='$id'");
		require 'views/master_view.php';
	}

	function edit()
	{
		global $request;
		//kaasab javascripti
		$this->scripts[] = 'test_add_edit.js';
		//salvestab urlilt test id parameetri muutujasse $id
		$id = $request->params[0];
		//omistab muutuja $test väärtuseks SQL päringu vaste (ülal defineeritud id)
		$test = get_all("SELECT * FROM test WHERE test_id = '$id'");
		//omistab muutuja $question väärtuseks SQL päringu vaste (ülal defineeritud id)
		$question = get_all("SELECT question_text FROM question WHERE test_id = '$id'");
		$test = $test[0];
		//vaatab, kas $question[0] on sisestatud kui on, siis näitab toda, kui ei ole, siis loob massiivi, kus paneb
		// question_textiks tühjuse. (et errorit ei tuleks.)
		$question = isset($question[0])?$question[0]:array('question_text' => '');


		require 'views/master_view.php';
	}
	function add(){
		global $request;
		//kaasab javascripti
		$this->scripts[] = 'test_add_edit.js';
		//omistab $test väärtuseks massiivi, kus on alltoodud elemendid.
		$test = array(
			'test_id'   => '',
			'name'   => '',
			'introduction'   => '',
			'conclusion'   => '',
			'passcode'   => '',
			'qustion_text'   => '',
		);
		require 'views/master_view.php';

	}
}