<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());


$query = mysql_query("SELECT first_name, last_name, candidate_position, votes FROM voting");

$category = array();
$category['name'] = 'first_name';

$series1 = array();
$series1['name'] = 'last_name';

$series2 = array();
$series2['name'] = 'candidate_position';

$series3 = array();
$series3['name'] = 'vote';


	while($r = mysql_fetch_array($query)) {
    $category['data'][] = $r['first_name'];
    $series1['data'][] = $r['last_name'];
    $series2['data'][] = $r['candidate_position'];
    $series3['data'][] = $r['vote'];
}

$result = array();
array_push($result,$category);
array_push($result,$series1);
array_push($result,$series2);
array_push($result,$series3);


print json_encode($result, JSON_NUMERIC_CHECK);


?>
