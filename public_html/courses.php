<?php
require_once 'inc/standard.php';
$page = new Page('courses', 'generic', 'courses');
$top = '<h1>Academic Courses</h1>';
$major = $_GET['major'];
$menu = '';

if(!isset($major))
	$major = 'EE';

function major_menu($major){

	if($major == 'EE')
		$menu .= ' <span id="select">Electrical Engineering Major</span> |';
	else
		$menu .= ' <a class="unselect" href="'.$PHP_SELF.'?major=EE">Electrical Engineering Major</a> |';
	
	if($major == 'MGMT')
		$menu .= ' <span id="select">Management Minor</span> |';
	else
		$menu .= ' <a class="unselect" href="'.$PHP_SELF.'?major=MGMT">Management Minor</a> |';

	if($major == 'ICS')
		$menu .= ' <span id="select">Informatics & Computer Science Minor</span>';
	else
		$menu .= ' <a class="unselect" href="'.$PHP_SELF.'?major=ICS">Informatics & Computer Science Minor</a>';
	
	return $menu;
}

$yearplan = '

<table border="1"> 
	<tr class="h1">
		<td>FALL</td> 
		<td>WINTER</td> 
		<td>SPRING</td> 
	</tr> 

	<tr>
		<td colspan="3" class="h2">Freshman</td>
	</tr> 
	
	<tr>
		<td>Mathematics 2D</td> 
		<td>Mathematics 2J</td> 
		<td>Anthro 2A</td> 
	</tr> 
	<tr>
		<td>Physics 2</td> 
		<td>Physics 7C</td> 
		<td>Physics 7D</td> 
	</tr> 
	
	<tr>
		<td>Psychology P9</td> 
		<td>Physics 7LC</td> 
		<td>Physics 7LD</td> 
	</tr>

	<tr>
		<td>Writing 39B</td>
		<td>Chemistry 1A</td> 
		<td>ICS 22</td> 
	</tr>
	
	<tr>
		<td>EECS10</td>
		<td>ICS 21</td>
		<td></td>
	</tr>
	
	<tr class="units">
		<td>units:20</td>
		<td>units:19</td>
		<td>units:15</td>
	</tr>
	
	<tr>
		<td colspan="3" class="h2">Sophomore</td>
	</tr> 
	
	<tr>
		<td>Mathematics 6D</td> 
		<td>Mathematics 3D</td> 
		<td>Mathematics 2E</td> 
	</tr> 
	<tr>
		<td>Writing 39C</td> 
		<td>Physics 52B</td> 
		<td>AFAM 40C</td> 
	</tr> 
	<tr>
		<td>EECS31</td> 
		<td>EECS70A </td> 
		<td>EECS70B</td> 
	</tr> 
	
	<tr>
		<td>Art 1A</td> 
		<td>EECS31L</td>
		<td>EECS70LB</td>
	</tr> 
	
	<tr>
		<td>CSE 23</td> 
		<td>Physics 7E</td>
		<td>Mangement 5</td>
	</tr> 
	
	<tr>
		<td></td> 
		<td>Engineering 195</td>
		<td>Econ 20A</td>
	</tr> 
	
	<tr class="units">
		<td>units:20</td>
		<td>units:21</td>
		<td>units:21</td>
	</tr>
	
	<tr>
		<td colspan="3" class="h2">Junior</td>
	</tr> 
	
	<tr>
		<td> Physics 52A</td> 
		<td>  EECS170B, 170LB</td> 
		<td>  EECS170C, EECS170LC</td> 
	</tr> 
	<tr>
		<td>EECS180</td> 
		<td>EECS150A</td> 
		<td>EECS150B</td> 
	</tr> 
		<tr><td>EECS145</td> 
		<td>ENGR54 or ENGR80</td> 
		<td>EECS140</td> 
	</tr> 
	<tr>
		<td>ENG 199</td> 
		<td>General Education</td> 
		<td>General Education</td> 
	</tr> 
	<tr>
		<td colspan="3" class="h2">Senior</td>
	</tr> 
	
	<tr>
		<td>EECS170D</td> 
		<td>EECS189B</td> 
		<td>Technical Elective</td> 
	</tr> 

	<tr>
		<td>EECS160A, 160LA</td> 
		<td>ENGR190W</td> 
		<td>Technical Elective</td> 
	</tr> 

	<tr>
		<td>EECS189A</td> 
		<td>Technical Elective</td> 
		<td>General Education</td> 
	</tr> 

	<tr><td>Technical Elective</td> 
		<td>Technical Elective</td> 
		<td>
	</tr> 
</table>
';


//******************
/*Second table
*///****************

$EE= '<table border="1" style="border-color:black">
  <tr class="h1">
    <td colspan="3">Electrical Engineering Degree</td>
  </tr>
  <tr class="h2">
    <td width="40%">Course</td>
    <td width="50%">Course Name</td>
    <td width="10%">Taken</td>
  </tr>
  <tr>
    <td>Math2A</td>
    <td>Calculus</td>
    <td>X </td>
  </tr>
  <tr>
    <td>Math2B</td>
    <td>Calculus</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Math2D</td>
    <td>Multivariable Calculus</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Math 2J</td>
    <td>Infinite Series &amp; Linear Algebra</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Math 3D</td>
    <td>Differential Equations</td>
    <td>X</td>
  </tr>
  <tr>
    <td height="23">Math 2E</td>
    <td>Advanced Multivariable Calculus</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>Chem1A</td>
    <td>General Chemistry</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Physics 7C</td>
    <td>Classical Physics (Forces)</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Physics 7LC</td>
    <td>Classical Physics Lab</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Physics 7D</td>
    <td>Classical Physics (Electricity &amp; Magnetism)</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Physics 7LD</td>
    <td>Classical Physics Lab</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Physics 7E</td>
    <td>Classical Phsyics (Waves &amp; Light)</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Physics 51A</td>
    <td>Modern Physics</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Physics 51B</td>
    <td>Modern Physics</td>
    <td>&nbsp;</td>
  </tr>
  <tr >
    <td>Physics 52A</td>
    <td>Fundamentals of Expert Physics</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>Physics 52B</td>
    <td>Fundamentals of Expert Physics</td>
    <td>X</td>
  </tr>
  <tr>
    <td> Physics 52C</td>
    <td>Modern Physics</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>EECS145</td>
    <td>Electrical Engineering Analysis</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>Engr 80 or 54</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>EECS 10</td>
    <td>Computer Methods in Programming (C)</td>
    <td>X</td>
  </tr>
  <tr>
    <td>EECS 31</td>
    <td>Intro to Digital Systems</td>
    <td>X</td>
  </tr>
  <tr>
    <td>EECS 31L</td>
    <td>Intro to Digital Logic Lab (VHDL)</td>
    <td>X</td>
  </tr>
  <tr>
    <td>EECS 70A</td>
    <td>Network Analysis I</td>
    <td>X</td>
  </tr>
  <tr>
    <td>EECS 70B</td>
    <td>Network Analysis II</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>EECS 70LB</td>
    <td>Network Analysis II Lab</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>EECS 140</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 150A</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 150B</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 160A</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 160LA</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 170A</td>
    <td>Electronics I</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>EECS 170LA</td>
    <td>Electronics I Lab</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td> EECS 170B</td>
    <td>Electronics II</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 170LB</td>
    <td>Electronics II Lab</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 170C</td>
    <td>Electronics III</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 170LC</td>
    <td>Electronics III Lab</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS 170D or 115</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS180</td>
    <td>Engineering Electromagnetics</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>ENG 199</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>ENGR190W</td>
    <td>Writing in Engineering</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS189A</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS189B</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>EECS</td>
    <td>Technical Elective</td>
    <td></td>
  </tr>
<tr>
  <td>EECS</td>
  <td>Technical Elective</td>
  <td></td>
</tr>
<tr>
  <td>EECS</td>
  <td>Technical Elective</td>
  <td></td>
</tr>
<tr>
  <td>EECS</td>
  <td>Technical Elective</td>
  <td></td>
</tr>
<tr>
  <td>EECS</td>
  <td>Technical Elective</td>
  <td></td>
</tr>
  <tr>
    <td>28 Design Units Required</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>';



//******************
/*Second table
*///****************



$ICS = '<table border="1">
  <tr class="h1">
    <td colspan="3">Informatics &amp; Computer Science Minor</td>
  </tr>
  <tr class="h2">
  <td>Course</td>
    <td>Course Name</td>
    <td>Taken</td>
  </tr>
  <tr>
    <td>I&amp;CSCI21</td>
    <td>Intro to Computer Science I</td>
    <td>X </td>
  </tr>
  <tr>
    <td>CSE 22</td>
    <td>Intro to Computer Science II</td>
    <td>X</td>
  </tr>
  <tr>
    <td>CSE 23</td>
    <td>Fundamentals of Data Structures</td>
    <td>X</td>
  </tr>
  <tr>
    <td>I&amp;CSCI 6D</td>
    <td>Discrete Mathmatics For Computer Science</td>
    <td>X</td>
  </tr>
  <tr>
    <td>I&amp;CSCI 51</td>
    <td>Differential Equations</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>CS 112</td>
    <td>Computer Science Tools</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>Upperdivision CS</td>
    <td>Computer Science Tools</td>
    <td>&nbsp;</td>
  </tr>
</table>';


//******************
/*Second table
*///****************





$MGMT = '<table border="1">
  <tr class="h1">
    <td colspan="3">Management Minor</td>
  </tr>
  <tr class="h2">
  <td>Course</td>
    <td>Course Name</td>
    <td>Taken</td>
  </tr>
  <tr>
    <td>Econ20A</td>
    <td>Intro to Economics</td>
    <td>X </td>
  </tr>
  <tr>
    <td>Math 7</td>
    <td>Statistics</td>
    <td>X</td>
  </tr>
  <tr>
    <td>Mgmt5</td>
    <td>Management Contermporary Organizations</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>Mgmt 102</td>
    <td>Managing Organizational Behavior</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>MGMT</td>
    <td>Upperdivision Managment Course</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>MGMT</td>
    <td>Upperdivision Managment Course</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>MGMT</td>
    <td>Upperdivision Managment Course</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>MGMT</td>
    <td>Upperdivision Managment Course</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>MGMT</td>
    <td>Upperdivision Managment Course</td>
    <td>&nbsp;</td>
  </tr>
</table>';

$tables = ($major == 'EE') ? $EE : $tables;
$tables = ($major == 'ICS') ? $ICS : $tables;
$tables = ($major == 'MGMT') ? $MGMT : $tables;
$tables = ($major == 'yearplan') ? $yearplan : $tables;

$bottom = major_menu($major).'<br><br>'.$tables;

$page->setContent($top, $bottom);
$page->buildPage();
?>