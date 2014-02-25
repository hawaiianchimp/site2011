<?php

/**
 * Page Class
 *
 * this class will contain all the output code such as headers and footers
 * 
 * @author Sean Burke
 *
 * Page($name, $type, $css, $login, $ads);
 * setTitle($title);
 * setLogin($login);
 * setContent($content_top, $content_bottom);
 * getName();
 * getTitle();
 * buildHeader();
 * buildNav();
 * buildContent();
 * buildFooter();
 * buildPage();
 *
 **/
 
class UCIPerson
{
	private $name;
	private $nickname;
	private $department;
	private $home_page;
	private $picture_url;
	private $major;
	private $level;
	private $ucinetid;
	private $user_array;
	
	function __construct($id)
	{
	$this->ucinetid = $id;
	
	$data = file_get_contents('http://directory.uci.edu/index.php?uid='.$this->ucinetid.'&form_type=plaintext');
	
	$data = trim($data);
	
	$data_array = explode('<br/>', $data);
	
	$this->user_array = array();
	
	foreach($data_array as $line)
	{
		$temp = explode(':', $line);
		$extra = ($temp[2])? ':'.$temp[2]:'';
		$this->user_array[strtolower(trim($temp[0]))] = trim($temp[1]).$extra; 
	}
	
	$this->name = $this->user_array['name'];
	$this->nickname = $this->user_array['nickname'];
	$this->department = $this->user_array['department'];
	$this->home_page = $this->user_array['home page'];
	$this->picture_url = $this->user_array['picture url'];
	$this->major = $this->user_array['major'];
	$this->level = $this->user_array['student\'s level'];
	}
	
	function getName()
	{
		return $this->name;
	}
	
	function getNickname()
	{
		return $this->nickname;
	}
	
	function getUCInetID()
	{
		return $this->name;
	}
	
	function getMajor()
	{
		return $this->major;
	}
	
	function getDepartment()
	{
		return $this->level;
	}
	
	function getHomePage()
	{
		return $this->home_page;
	}
	
	function getPictureURL()
	{
		return $this->picture_url;
	}
	
	function getUserArray()
	{
		return $this->user_array;
	}
	
	function isEngineer()
	{
		$majors = array('Engr EE', 'Engr BM', 'Engr CE','EngrCpE','EngrEnv','EngrChm','Engr ME','CSE', 'Enr MSE','Engr AE');
		foreach($majors as $major)
			if($this->major == $major)
				return true;
		return false;
	}
}

?>