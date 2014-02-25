<?php
require_once 'inc/standard.php';
$page = new Page('business', 'generic', 'business');
$top = '<h1>BleuKi Business Plan</h1>';
$bottom = '
<div class="item"><a href="/files/business/BleuKi.pdf">Download Business Plan<br><br><img src="images/business_plan.png"></a></div>
<div class="item"><a href="/files/business/BleuKi.ppt">Download Presentation<br><br><img src="images/bleuki_slide.png"></a></div>
<p class="left">I took a class called Entrepreneurship for Engineers, and in this class we learned how to start our own business. We had to create a team of 4-5 and come up with a technology that we could present in a business plan. Each one of the members in our group had an idea for his or her own technology, and we had to come to a consensus on which one we would agree to do. We finally agreed that the most feasible and logical choice was my idea of a Bluetooth software that would be installed on your cell phone to replace the physical key. Although the class taught me about the technical skills of running a business such as patenting, funding and pitching a proposal, the most important thing I learned was the ability to persuade and work with a group of individuals to reach a common goal.</p>
<h5 class="left">All documents of the BleuKi Business Plan and any other documents containing BleuKi are copyrighted to the BleuKi team</h5>';
$page->setContent($top, $bottom);
$page->buildPage();
?>