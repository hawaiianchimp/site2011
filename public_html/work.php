<?php
require_once 'inc/standard.php';
$page = new Page('work','generic', 'work');
$top = '<h1>Case Studies</h1>';
$bottom = '
<div class="item"><a href="case1.php">Case #1<br><br><img src="images/case1.png"></a></div>
<div class="item"><a href="case2.php">Case #2<br><br><img src="images/case2.png"></a></div>
<div class="item"><a href="site1.php">www.sigmanuuci.com<br><br><img src="images/site1.png"></a></div>  
<div class="item"><a href="business.php">Business Plan<br><br><img src="images/business_plan.png"></a></div>';
$page->setContent($top, $bottom);
$page->buildPage();
?>