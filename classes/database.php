<?php

mysql_connect(DATABASE_HOSTNAME, DATABASE_USERNAME) or mysql_error();
mysql_select_db(DATABASE_DATABASE) or mysql_error();
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER 'utf8'");

function q($sql, &$query_pointer = NULL, $debug = FALSE)
{
	if ($debug) {
		print "<pre>$sql</pre>";
	}
	$query_pointer = mysql_query($sql) or mysql_error();
	switch (substr($sql, 0, 4)){
		case 'SELE':
			return mysql_num_rows($query_pointer);
		case 'INSE':
			return mysql_insert_id();
		default:
			return mysql_affected_rows();

	}
}

function get_one($sql, $debug = FALSE)
{
	if ($debug) {
		print "<pre>$sql</pre>";
	}
	$q = mysql_query($sql) or exit (mysql_error());

	if (mysql_num_rows($q) === FALSE) {
		exit($sql);
	}
	$result = mysql_fetch_row($q);
	return is_array($result) && count($result) > 0 ? $result[0] : NULL;

}

function get_all($sql){
	$q = mysql_query($sql) or exit (mysql_error());
	while(($result[] = mysql_fetch_assoc($q)) || array_pop($result)){
			;
	}
	return $result;
}