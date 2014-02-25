<?php
require_once 'inc/standard.php';
$page = new Page('case2');
$top = '<h1>Cranston Nissan Case Study</h1><h4 align=center style=\'text-align:center;\'>Download: <a href="/files/sean_burke_case_study_2.docx">docx</a> | <a href="/files/sean_burke_case_study_2.doc">doc</a> | <a href="/files/sean_burke_case_study_2.pdf">pdf</a> | <a href="/files/case_study_2.htm">html</a></h4>';
$bottom = ' 
<p class=MsoNormalCxSpFirst align=center style=\'text-align:left;line-height:
200%\'>Sean Burke</p>
<p class=MsoNormalCxSpFirst align=center style=\'text-align:left;line-height:
200%\'>11039386</p>
<p class=MsoNormalCxSpFirst align=center style=\'text-align:left;line-height:
200%\'>MGMT 5</p>
<p class=MsoNormalCxSpFirst align=center style=\'text-align:left;line-height:
200%\'>Due: 5/18/10</p>

<p class=MsoNormalCxSpFirst align=center style="text-align:center;line-height:
200%">Cranston Nissan Case study</p>

<p class=MsoNormalCxSpMiddle align=center style="text-align:center;line-height:
200%">Answer the following questions from the perspective of TQM</p>

<p class=MsoNormal style="line-height:200%"><b>1) Categorize the quality problems
in this case.</b></p>

<p class=MsoNormal style="line-height:200%">Quality is defined as the
reliability, durability, serviceability and dependability of products and
services and also as fitness for use. Steve Jackson\'s body shop did not display
any of these characteristics, but instead showed the opposite. It did not have
an upper or lower control limit set otherwise it would realize that quality was
below their control limit and they would strive to improve quality. Its
objective should have bee to repair the rust damage in an efficient and
effective manner, but it instead created more problems and demonstrated poor
quality. <span style="mso-spacerun: yes">&nbsp;</span>This is a problem with
efficiency because instead of fixing one problem, the created more which they
had to fix over a long period of time. There was also the problem of inventory
being out of stock. The repair shop should have used the economic order
quantity to ensure they are always in stock when the customer needs a part
instead of waiting 3 days to order the part.</p>

<p class=MsoNormal style="line-height:200%"><b>2) What are the probable causes of
so many mishaps?</b></p>

<p class=MsoNormal style="line-height:200%">This is a cause of not implementing
Total Quality Management. From the perspective of Total Quality Management, the
quality problems can be broken down into five key elements: Objective, Design,
Capabilities, Infrastructure and Metrics. These are all elements of the
continuous process improvement, also known as the kaizen. The Objective of the
body shop was one problem because the customer had gone in to get repair for
rust damage, but instead, was presented with more problems than he had started
out with. This is also due to a failure in the Design. If there were a specific
Design to execute a rust damage repair process, then this would reduce the
problems cause in other areas of the car. A design is meant to increase the
objective while minimizing the number of steps, the complexity and the time.
The Capabilities of the design was a problem because the capabilities are meant
to determine which steps are needed to implement the design. There either weren\'t
enough steps in the design, or unnecessary steps since the car was not returned
to its original state after the repair. The infrastructure with the employees
was also flawed and is evident when there are miscommunications between the two
subcontractors. There were discrepancies between whether Sam Monahan should pay
for the repair to the speedometer or not and also when Jim Boyd reported that
"there was nothing to report" and the car sat in the shop for 3 days. The final
step is to find the Metrics that help Jackson monitor and determine how well a
redesign would be. All of these problems led to the cause of so many mishaps.</p>

<p class=MsoNormal style="line-height:200%"><b>3) What specific actions should
Jackson take immediately? What should some of his longer-term goals be?</b></p>

<p class=MsoNormal style="line-height:200%">Jackson should immediately
compensate the customer for his troubles if he expects to have Sam Monahan as a
customer in his shop again. Sam will hopefully spread a positive word of mouth
if Jackson can compensate for Sam\'s frustration. In the long-term, Jackson\'s
goals should be to reengineer his current quality management and aim for a
Six-Sigma quality service. This will ensure that the proper quality will be
implemented in the future and that only 3.4 cars per every million will be
defective or inefficient to repair. To do this, he would need to produce a
quality control chart to determine whether the current process is lacking
performance or improving performance. Then he would need to implement a continuous
process improvement to reengineer his service and determine where the problems
can be eliminated. He should then train his workers to improve their work
standard and get their work done more efficiently while maintaining quality
service. The workers could then work at effective capacity, instead of design
capacity, to get their work done in an effective manner.</p>
';
$page->setContent($top, $bottom);
$page->buildPage();
?>