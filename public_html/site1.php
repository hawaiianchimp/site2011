<?php
require_once 'inc/standard.php';
$page = new Page('site1', 'generic', 'site');
$top = '<h1>Websites</h1>';
$bottom = ' <div class="item"><a href="http://newport.eecs.uci.edu/~stburke">Go to Sean\'s Home Page<br><br><img src="images/site2.png"></a></div><div class="item"><a href="http://www.sigmanuuci.com/rush.php">Go to Sigma Nu Rush<br><br><img src="images/site1.png"></a></div>

<p class="left">In addition to this website, <a href="http://www.seantburke.com">seantburke.com</a>, these are two websites that I created. The one one the left is a website I created in highschool and contains many projects which I have done, and the one on the right is a webpage I made for my fraternity. I Put a lot of work into both of these websites, and it is easy to see the progress I have made in web development from my highschool website to my fraternity website to this website</p>';
$page->setContent($top, $bottom);
$page->buildPage();
?>