<!--
File name: Home.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Home page of the Personal Portfolio web-site.
-->

<?php
$page = "Home";

include('header.php');
?>

            <h2>Hello, I'm Nick, a Programmer and Web Designer</h2>
            <h3>I create fast and elegant websites with sleek designs.</h3>
            

            <h1>Projects</h1>
            <div>
                <div id="featured"> 
                    <a href="http://webdesign4.georgianc.on.ca/~200231116/FinalProject/forumIndex.php" ><img src="images/websiteScreenshot.png" width="600" height="450" alt="Overflow: Hidden No More" /></a>
                    <a href="http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php"><img src="images/website3Screenshot.png" width="600" height="450" alt="HTML Captions" /></a>
                    <a href="http://github.com/NicKuznecov"><img src="images/languageFormScreenshot.png" width="600" height="450" alt="and more features" /></a>
                    <a href="http://github.com/NicKuznecov"><img src="images/basicTranslator.png" width="600" height="450" alt="and more features"/></a>
                </div>
            </div>
    
<?php
include('sideContent.php');
?>


                <h1> Call to Action </h1>
                <form action="http://webdesign4.georgianc.on.ca/~200231116/Project1/Projects.php">
                <input type ="submit" value="View More Work">


                <h1> Keep Connected </h1>

                <a href="https://twitter.com/NicKuznecov"><img src="images/twitterLogo.jpg" width="75" height="75" alt="twitter logo" /></a>
                <a href="https://facebook.com"><img src="images/facebookLogo.jpg" width="75" height="75" alt="facebook logo" /></a>
                <a href="https://github.com/NicKuznecov"><img src="images/githubLogo.png" width="75" height="75" alt="github logo" /></a>

    
<?php
include('mainContent.php');
?>


<?php
include ('footer.php');
?>
