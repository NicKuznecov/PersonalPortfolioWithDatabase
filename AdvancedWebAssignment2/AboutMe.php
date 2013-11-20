<!--
File name: AboutMe.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: About Me page of the Personal Portfolio web-site.
-->

<?php
$page = "AboutMe";

include('header.php');
?>


<a href="resume/Resume.pdf" target="_blank" ><img src="images/resumeScreenshot.png" width="500px" height ="600px"/></a> 

<?php
include('sideContent.php');
?>
                
                <h1>Information</h1>
                <p>• Date of Birth: December 20th, 1993 </br> • Place of Birth: Brampton, Ontario, Canada</br> • Attended Barrie Central Collegiate, 2008-2012 </br> • COPA at Georgian College 2012-2015</br></p>
<?php
include('mainContent.php');
?>


<?php
include ('footer.php');
?>
