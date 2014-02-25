<?php
require_once 'inc/standard.php';
$page = new Page('index', 'generic', 'cover');
$page->setTitle(COMPANY);
$content_top = '<h1>Cover Page</h1>';
$content_bottom = ' 
<div id="cover">
	<img src="/images/profile.jpg" id="profile">
	<div id="right">
		<table>
			<tr>
				<td class="title">Name:</td>
				<td>'.FULLNAME.'</td>
			</tr>
			<tr>
				<td class="title">Major:</td>
				<td><a href="http://www.eng.uci.edu/dept/eecs" target=_BLANK>'.MAJOR.'</a></td>
			</tr>
			<tr>
				<td class="title">Minors:</td>
				<td><a href="http://merage.uci.edu/Undergrad/Content/Management-Minor/250" target=_BLANK>Management</a></td>
			</tr>
			<tr>
				<td class="title"></td>
				<td><a href="http://www.ics.uci.edu/ugrad/degrees/degree_ics_minor.php" target=_BLANK>Informatics & Computer Science</a></td>
			</tr>
			<tr>
				<td class="title">Email:</td>
				<td><a href="mailto:'.EMAIL.'">'.EMAIL.'</a></td>
			</tr>
		</table>
		Table of contents
		<ul>
			<li><a href="resume.php">Resume</a></li>
			<li><a href="courses.php">Academic Course List</a></li>
			<li><a href="activities.php">Extracurricular Activities</a></li>
			<li><a href="work.php">Work Samples</a></li>
			<ul>
				<li><a href="case1.php">Case Study #1</a></li>
				<li><a href="case2.php">Case Study #2</a></li>
				<li><a href="work.php">Other Work Product</a></li>
			</ul>
			<li><a href="self.php">Managerial Self-Readiness Analysis</a></li>
		</ul>
			
	</div>
</div>
';
$page->setContent($content_top, $content_bottom);
$page->buildPage();
?>