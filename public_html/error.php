<?php
require_once 'inc/standard.php';
$page = new Page('error');
$top = ' <h1>404 Error</h1>';
$bottom = '<p>The page you were looking for does not exist. Click on the home tab to go back to the main page.</p>';
$page->setContent($top,$bottom);
$page->buildPage();
?>