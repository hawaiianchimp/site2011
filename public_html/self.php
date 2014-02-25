<?php
require_once 'inc/standard.php';
$page = new Page('self');
$top = '<h1>Managerial Self Analysis</h1>';
$bottom = '
<div class="item"><a href="case1.php">Case #1<br><br><img src="images/case1.png"></a></div>
<div class="item"><a href="case2.php">Case #2<br><br><img src="images/case2.png"></a></div> 
<div class="item"><a href="business.php">Business Plan<br><br><img src="images/business_plan.png"></a></div>';
$page->setContent($top, $bottom);
$page->buildPage();
?>