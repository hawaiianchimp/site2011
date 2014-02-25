<?php
require_once 'inc/standard.php';

//$page = new Page($name, $css, $type, $login, $ads);
$page = new Page('ucinet');


$ucinetid = $_GET['ucinetid'];

$person = new UCIPerson($ucinetid);

/*
$data = file_get_contents('http://directory.uci.edu/index.php?uid='.$ucinetid.'&form_type=plaintext');

$data = trim($data);

$data_array = explode('<br/>', $data);

$user = array();

foreach($data_array as $line)
{
	$temp = explode(':', $line);
	$extra = ($temp[2])? ':'.$temp[2]:'';
	$user[trim($temp[0])] = trim($temp[1]).$extra; 
}
*/

$not = ($person->isEngineer())? '':'not';

$top = '<h1>UCInetID</h1>';
$input = '<form name="input" action="ucinet.php" method="get">
UCInetID: <input type="text" name="ucinetid" value="'.$ucinetid.'"/>
<input type="submit" value="Submit" />
</form>';

$output = ($person->getName()) ? $person->getName().' is '.$not.' an Engineer': 'Not a valid UCInetID';
$output .= ': '.$person->getMajor();
foreach($person->getUserArray() as $row)
{
	$output .= '<span>'.$row.'</span><br>';
}

$bottom = $input.$output;
$page->setContent($top, $bottom);
$page->buildPage();
?>

