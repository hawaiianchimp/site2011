<?php
require_once 'inc/standard.php';
$page = new Page('other');
$page->setContentBottom(' <script type="text/javascript" src="http://cdn.widgetserver.com/syndication/subscriber/InsertWidget.js"></script><script type="text/javascript">if (WIDGETBOX) WIDGETBOX.renderWidget(\'fa19ae7e-37a6-4e9b-bf2f-74955fc665e6\');</script><noscript>Get the <a href="http://www.widgetbox.com/widget/Nike">Nike+</a> widget and many other <a href="http://www.widgetbox.com/">great free widgets</a> at <a href="http://www.widgetbox.com">Widgetbox</a>! Not seeing a widget? (<a href="http://docs.widgetbox.com/using-widgets/installing-widgets/why-cant-i-see-my-widget/">More info</a>)</noscript>');
$page->buildPage();
?>