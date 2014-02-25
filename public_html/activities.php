<?php
require_once 'inc/standard.php';
$page = new Page('activities');
$top = '<h1>Extracurricular Activities</h1><h4 align=center style=\'text-align:center;\'>Download: <a href="/files/activities/activities.docx">docx</a> | <a href="/files/activities/activities.doc">doc</a> | <a href="/files/activities/activities.pdf">pdf</a> | <a href="/files/activities/activities.htm">html</a></h4>';
$bottom = '<p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'>Engineering <span
class=GramE>Student Council</span></b> 2009 &#8211; Present</p>

<p class=MsoNormal>This organization is one that involves getting engineering
students to collaborate with not only each other, but with faculty and
industries for jobs and research opportunities. I joined this club in the <span
class=GramE>Fall</span> of 2009 and took the position of Corporate Affairs
Co-Chair in Winter of 2010. As the Corporate Affairs Co-Chair, I run a
20-person committee along with my other Co-Chair. Our committee is in charge of
setting up Industry Info Session, Company Tours, and the Annual <span
class=SpellE>EngiTECH</span> Career Fair in the <span class=GramE>Winter</span>.
This position requires not only managerial skills for running a 20-person
committee, but also communication skills to be able to speak with company
representatives.</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'>Sigma Nu Fraternity</b>
2008 &#8211; Present</p>

<p class=MsoNormal>In this organization, I have held 2 positions: the Historian
and the Webmaster. As historian, I was given a project to conduct a composite
photography session where we get professional photos of every member in the
organization. I had to contact both the photography company and the photographer
as well as manage over 50 members to have the process run as smoothly and efficiently
as possible. I had to stay in constant contact with the photography company
through email, and asked any possible questions I may have had as to reduce
confusion. I also sent out many email to each member to make sure they were signed
up for a time. There also came conflicts with previous historians because we
were signed on 2 different contracts with 2 different companies. I learned skills
in decision making as well as managerial skills, but the most important skill I
learned was that in order to prevent miscommunication and confusion, you have
to be communicating as much as possible.</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>';
$page->setContent($top,$bottom);
$page->buildPage();
?>