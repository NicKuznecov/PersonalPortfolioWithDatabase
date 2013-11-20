<!--
File name: Projects.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Project page of the Personal Portfolio web-site, containing images of three projects and their descriptions.
-->

<?php
$page = "Projects";

include('header.php');
?>
            <h2>Arma III Forum</h2>
            <p>The Arma III website is a project that I did for the "Intro to Web Programming" course in the Winter of 2013. The website included a forum, which required you to sign in to post a message, or post a topic, and required you to sign in as an administrator to create a category, and used a SQL database. </p>
            <h2>Personal Portfolio Website</h2>
            <p>A personal portfolio about me, that includes contact information, services that I offer, and projects that I am currently working on, or have recently completed. </p>
            <h2>C# Language Program</h2>
            <p>A very basic foreign language tool, that I am in the midst of working on in my spare time using C#. I enjoy learning languages and this project is a good way to do two things that I enjoy doing at the same time.</p>
<?php
include('sideContent.php');
?>
<h1>Project Images</h1>
<a href="http://webdesign4.georgianc.on.ca/~200231116/FinalProject/forumIndex.php"> <img src="images/websiteScreenshot.png" alt="?" width="340" height="220" ></a>     
<a href="http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php"> <img src="images/website3Screenshot.png" alt="?" width="340" height="220"></a>
<a href=""> <img src="images/languageFormScreenshot.png" alt="?" width="340" height="220"></a>
<?php
include('mainContent.php');
?>


<?php
include ('footer.php');
?>

