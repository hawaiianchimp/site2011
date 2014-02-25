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
 
class Page
{
	public $name;
 	public $title;
	public $css;
	public $html_tag;
	public $extra_meta;
	public $body_tag;
	public $url;
	public $login;
	public $ads;
	public $keywords;
	public $description;
	public $content;
	
	function __construct($name, $type = 'generic', $css = null, $login = false, $ads = false)
	{
		$this->title = COMPANY.' - '.ucfirst($name);
		$this->name = strtolower($name);
		$this->css = $css;
		$this->login = $login;
		$this->ads = $ads;
		$this->content = new Content($type);
		//$this->url = str_replace(' ', '_',strtolower($name.'.php'));
	}
	
	public function setTitle($title)
	{
	$this->title = $title;
	}
	
	public function setLogin($login)
	{
	$this->login = $login;
	}

	public function getName()
	{
	return $this->name;
	}
	
	public function getTitle()
	{
	return $this->title;
	}
	
	public function setContent($content_top, $content_bottom)
	{
		$this->content->setContent($content_top, $content_bottom);
	}
	
	public function setContentTop($content_top)
	{
		$this->content->setContentTop($content_top);
	}
	
	public function setContentBottom($content_bottom)
	{
		$this->content->setContentBottom($content_bottom);
	}
	
	

	/**
	 * Outputs the header html code
	 *
	 * @author Sean Burke
	 * @param $title, $css, $login
	 * @return void
	 */
 
 	public function buildHeader()
	{
		$css = $this->css;
		$css = ($css) ? '<link rel=stylesheet type="text/css" href="css/'.$css.'.css"  />' : '';
		
		echo 
		'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html '.$this->html_tag.'>
		<head>
			<title>'.$this->title.'</title>
			<link rel="shortcut icon" href="images/favicon.ico" />
			'.$this->extra_meta.'
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="description" content="'.$this->description.'" />
			<meta name="keywords" content="'.$this->keywords.'" />
			<script src="js/jquery.js" type="text/javascript"></script>
			<link rel="stylesheet" type="text/css" href="css/global.css" />'.$css.'
		</head>
		<body '.$this->body_tag.'>
			<div id="header">
				<span id="logo"><a href="index.php"><img src="images/logo.png"></a></span>
				<!--<span id="login"><a href="login.php">Login</a>|<a href="signup.php">Sign Up</a></span>-->
			</div>
			<div id="container">';
	}
	
	/**
	 * Builds the navigation bar
	 *
	 * @author Sean Burke
	 * @param 
	 * @return void
	 */
 
	private function buildNav()
	{
		$highlight = 'highlight';
		if($this->name == 'index')
			$active[1] = $highlight;
		elseif($this->name == 'resume')
			$active[2] = $highlight;
		elseif($this->name == 'courses')
			$active[3] = $highlight;
		elseif($this->name == 'activities')
			$active[4] = $highlight;
		elseif($this->name == 'work')
			$active[5] = $highlight;
		elseif($this->name == 'self')
			$active[6] = $highlight;
			 
		echo ' 
		<div id="nav">
			<li><a id="'.$active[1].'" href="index.php">Cover</a></li>
			<li><a id="'.$active[2].'" href="resume.php">Resume</a></li>
			<li><a id="'.$active[3].'" href="courses.php">Course List</a></li>
			<li><a id="'.$active[4].'" href="activities.php">Activities</a></li>
			<li><a id="'.$active[5].'" href="work.php">Work Samples</a></li>
			<li><a id="'.$active[6].'" href="self.php">Self Analysis</a></li>
		</div>';
	}

	/**
	 * builds Content with the top and bottom
	 *
	 * @author Sean Burke
	 * @param $content_top $content_bottom
	 * @return void
	 */
	 
	 public function buildContent()
	 {
	 	$this->content->buildContent($this->name);
	 }

	/**
	 * Outputs the footer html code
	 *
	 * @author Sean Burke
	 * @param $ads
	 * @return void
	 */
 
	public function buildFooter()
	{
		echo '
			</div>
		</div>
		
		
		<div id="footer">
			<p>Created by '.NAME.'<br>
			&copy; '.date('Y').' '.COMPANY.'</p>
		</div>
		
		
		</body>
		</html>';
	
	}
	
	public function buildPage()
	{
	$this->buildHeader();
	$this->buildNav();
	$this->buildContent();
	$this->buildFooter();
	}
}


/**
 * Content Class
 * 
 * class for the different contents of the page
 *
 * @author Sean Burke
 * 
 * content($type);
 * setContent($top, $bottom);
 * setContentBottom($bottom);
 * setContentTop($top);
 * buildContent();
 */
 
 
class Content
{
	public $type;
	public $content;
	public $content_top;
	public $content_bottom;
	
	public function __construct($type = 'generic')
	{
		$this->type = $type;
	}
	
	public function setContent($content_top, $content_bottom)
	{
	$this->content_top = $content_top;
	$this->content_bottom = $content_bottom;
	}
	
	public function setContentBottom($content_bottom)
	{
	$this->content_bottom = $content_bottom;
	}
	
	public function setContentTop($content_top)
	{
	$this->content_top = $content_top;
	}
	
	public function buildContent($name)
	{
		if($this->type == 'generic')
		{
			$content_top = $this->content_top;
			$content_top = ($content_top) ? $content_top :'<h1>'.ucfirst($name).' page in Progress</h1>';
			
			$this->content = '
			<div id="content_top">'.$content_top.'</div>
			<div id="content_bottom">'.$this->content_bottom.'</div>';
		}
		elseif($this->type == 'full')
		{
			$this->content = '
			<div id"content">'.$content_top.'</div>';
		}
		
		echo $this->content;	
	}
}

?>