<!--
File name: mobile.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Mobile Page of the Personal Portfolio Website
-->   

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="initial-scale=1.0, user-scalable=no"> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>Personal Portfolio</title>
  
  <!-- CSS -->
  
  <!-- PT Serif Google Webfonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption&subset=latin,cyrillic' rel='stylesheet' type='text/css'>  
  <!-- Jquery Mobile CSS -->
  <link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css"> 
  
  <!-- Mobile CSS -->
  <link rel="stylesheet" href="styles/mobilestyles.css" type="text/css">
  <!-- JS Slider CSS -->
  <link rel="stylesheet" href="styles/flexslider.css" />
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="codiqa.ext.css"/> 
  <!-- Theme Roller -->
  <link rel="stylesheet" href="styles/themes/mobileTheme.css" />
  <link rel="stylesheet" href="styles/themes/mobileTheme.min.css" />
 
  <!-- JAVASCRIPT -->
  
  <!-- Javascript Slider -->        
  <script src="javascript/jquery.flexslider-min.js"></script>
  <script src="javascript/jquery.flexslider.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>   
  <!-- jQuery and jQuery Mobile -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
  <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script> 
  <!-- Extra Codiqa features -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script> 
    
</head>
    <body>
        <!-- Home -->
        <div data-role="page" id="Home" >
            <div data-role="header" >
                <img id="logo" src="images/logo.png" alt="Logo" /> 
                <div id="header">
                <h3>Personal Portfolio</h3>
                </div>
            </div>
            <!-- NAVIGATION BAR -->
            <div data-role="navbar" data-iconpos="top" id="navbar">
                <ul>
                    <li>
                        <a href="#Home" data-transition="fade" data-theme="a" data-icon="home" class="ui-btn-active ui-state-persist">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#About" data-transition="fade" data-theme="a" data-icon="grid">
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="#Contact" data-transition="fade" data-theme="a" data-icon="edit">
                            Contact Me
                        </a>
                    </li>
                    <li>
                        <a href="#BusinessContacts" data-transition="fade" data-theme="a" data-icon="info">
                            Business Contacts
                        </a>
                    </li>
                    <li>
                        <a href="#Login" data-transition="fade" data-theme="a" data-icon="plus">
                            Login
                        </a>
                    </li>                    
                    <li>
                        <a href="#page1" data-transition="fade" data-theme="a" data-icon="back" data-rel="back">
                            Back
                        </a>
                    </li>
                </ul>
            </div>
            <!-- BODY CONTENT OF HOME PAGE -->
            <div data-role="content">
                <div id="images">
                    <!-- Set width of each image to 49% of the screen so they sit side by side -->
                    <a href="#Projects" ><img src="images/projectsButton.jpg" width="49%" float ="left"/></a>
                    <a href="#Services" ><img src="images/servicesButton.jpg" width="49%" float="right"/></a>
                </div>
                <!--JAVASCRIPT SLIDER-->
                <section class="slider">
                    <div class="flexslider">            
                        <ul class="slides">
                            <li>
                                <img src="images/website3ScreenshotMobile.png" />
                            </li>
                            <li>
                                <img src="images/ArmaScreenshot.png" />
                            </li>
                            <li>
                                <img src="images/languageFormScreenshotMobile.png" />
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- END OF JAVASCRIPT SLIDER -->
            </div>
            <!-- END OF CONTENT -->
            <!-- FOOTER -->
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Copyright © 2013
                </h3>
                <div id ="full">
                    <!-- Link to full site -->
                    <a href="http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php" data-transition="fade" rel="external">
                        Full Site
                    </a>
                </div>
            </div>
            <!-- END OF FOOTER -->
        </div>
        <!-- END OF HOME PAGE -->
        <!-- About Me -->
        <div data-role="page" id="About">
            <div data-theme="a" data-role="header">
                <img id="logo" src="images/logo.png" alt="Logo" /> 
                <div id="header">
                <h3>Personal Portfolio</h3>
                </div>
            </div>
            <!-- START OF NAVBAR -->
            <div data-role="navbar" data-iconpos="top">
                <ul>
                    <li>
                        <a href="#Home" data-transition="fade" data-theme="a" data-icon="home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#About" data-transition="fade" data-theme="a" data-icon="grid" class="ui-btn-active ui-state-persist">
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="#Contact" data-transition="fade" data-theme="a" data-icon="edit">
                            Contact Me
                        </a>
                    </li>
                    <li>
                        <a href="#BusinessContacts" data-transition="fade" data-theme="a" data-icon="info">
                            Business Contacts
                        </a>
                    </li>
                    <li>
                        <a href="#Login" data-transition="fade" data-theme="a" data-icon="plus">
                            Login
                        </a>
                    </li>                    
                    <li>
                        <a href="#page1" data-transition="fade" data-theme="a" data-icon="back" data-rel="back">
                            Back
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END OF NAVBAR -->
            <!-- START OF ABOUT ME CONTENT -->
            <div data-role="content">
                <div id ="information">
                    <h1>Information</h1>
                    <ul>
                        <li>Date of Birth: December 20th, 1993 </li>
                        <li>Place of Birth: Brampton, Ontario, Canada</li>
                        <li>Attended Barrie Central Collegiate, 2008-2012</li>
                        <li>COPA at Georgian College 2012-2015</li>
                    </ul>
                </div>
                <div id="resume" style="width: 100%; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
                    <img id="resume" src="images/resumeScreenshot.png" alt="image"
                    style="position: relative; width: 100%; ">
                </div>
            </div>
            <!-- END OF ABOUT ME CONTENT -->
            <!-- START OF FOOTER -->
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Copyright © 2013
                </h3>
                <div id="full">
                    <a href="http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php" data-transition="fade" rel="external">
                        Full Site
                    </a>
                </div>
            </div>
            <!-- END OF FOOTER -->
        </div>
        <!-- END OF ABOUT ME PAGE -->
        <!-- Contact Me -->
        <div data-role="page" id="Contact">
            <div data-theme="a" data-role="header">
                <img id="logo" src="images/logo.png" alt="Logo" /> 
                <div id="header">
                <h3>Personal Portfolio</h3>
                </div>
            </div>
            <!-- START OF NAVBAR -->
            <div data-role="navbar" data-iconpos="top" >
                 <ul>
                    <li>
                        <a href="#Home" data-transition="fade" data-theme="a" data-icon="home"  >
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#About" data-transition="fade" data-theme="a" data-icon="grid"  >
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="#Contact" data-transition="fade" data-theme="a" data-icon="edit" class="ui-btn-active ui-state-persist">
                            Contact Me
                        </a>
                    </li>
                    <li>
                        <a href="#BusinessContacts" data-transition="fade" data-theme="a" data-icon="info">
                            Business Contacts
                        </a>
                    </li>
                    <li>
                        <a href="#Login" data-transition="fade" data-theme="a" data-icon="plus">
                            Login
                        </a>
                    </li>                    
                    <li>
                        <a href="#page1" data-transition="fade" data-theme="a" data-icon="back" data-rel="back">
                            Back
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END OF NAVBAR -->
            <!-- START OF CONTENT -->
            <div data-role="content">
                <h2>Contacting Me:</h2>
                <ul>
                    <li>Email Address: Nickuznecov@gmail.com</li>
                    <li>Cell Phone #: 705-500-3646</li>
                </ul>
                <h2>Social Media</h2>
                <a href="https://twitter.com/NicKuznecov"><img src="images/twitterLogo.jpg" width="75" height="75" alt="twitter logo" rel="external"/></a>
                <a href="https://facebook.com"><img src="images/facebookLogo.jpg" width="75" height="75" alt="facebook logo" rel="external" /></a>
                <a href="https://github.com/NicKuznecov"><img src="images/githubLogo.png" width="75" height="75" alt="github logo" /></a>
                <a href="http://www.linkedin.com/pub/nick-kuznecov/84/716/196"> <img src="images/linkedinLogo.jpg" width ="75" height="75" alt="linkedin logo" /></a>

            </div>
            <!-- END OF CONTENT -->
            <!-- START OF FOOTER -->
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Copyright © 2013
                </h3>
                <div id ="full">
                    <a href="http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php" data-transition="fade" rel="external">
                        Full Site
                    </a>
                </div>
            </div>
            <!-- END OF FOOTER -->
        </div>
        <!-- END OF CONTACT ME PAGE -->
        <!-- Projects -->
        <div data-role="page" id="Projects">
            <div data-theme="a" data-role="header">
                <img id="logo" src="images/logo.png" alt="Logo" /> 
                <div id="header">
                <h3>Personal Portfolio</h3>
                </div>
            </div>
            <!-- NAVBAR -->
            <div data-role="navbar" data-iconpos="top">
                <ul>
                    <li>
                        <a href="#Home" data-transition="fade" data-theme="a" data-icon="home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#About" data-transition="fade" data-theme="a" data-icon="grid">
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="#Contact" data-transition="fade" data-theme="a" data-icon="edit">
                            Contact Me
                        </a>
                    </li>
                    <li>
                        <a href="#BusinessContacts" data-transition="fade" data-theme="a" data-icon="info">
                            Business Contacts
                        </a>
                    </li>
                    <li>
                        <a href="#Login" data-transition="fade" data-theme="a" data-icon="plus">
                            Login
                        </a>
                    </li>                    
                    <li>
                        <a href="#page1" data-transition="fade" data-theme="a" data-icon="back" data-rel="back">
                            Back
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END OF NAVBAR -->
            <!-- START OF CONTENT -->
            <div data-role="content">
                <div>
                <h2>Arma III Forum</h2>
                <p>The Arma III website is a project that I did for the "Intro to Web Programming" course in the Winter of 2013. The website included a forum, which required you to sign in to post a message, or post a topic, and required you to sign in as an administrator to create a category, and used a SQL database. </p>
                <h2>Personal Portfolio Website</h2>
                <p>A personal portfolio about me, that includes contact information, services that I offer, and projects that I am currently working on, or have recently completed. </p>
                <h2>C# Language Program</h2>
                <p>A very basic foreign language tool, that I am in the midst of working on in my spare time using C#. I enjoy learning languages and this project is a good way to do two things that I enjoy doing at the same time.</p>
                </div>
                <div id="languageform" style="width: 100%; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
                    <img id="languageform" src="images/languageFormScreenshotMobile.png" alt="image"
                    style="position: relative; width: 100%; ">
                </div>
                <div id="website3" style="width: 100%; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
                    <img id="website3" src="images/website3ScreenshotMobile.png" alt="image" href= "http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php"
                    style="position: relative; width: 100%; ">
                </div>
                <div id="website" style="width: 100%; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
                    <img id="website" src="images/ArmaScreenshot.png" alt="image" href = "http://webdesign4.georgianc.on.ca/~200231116/FinalProject/forumIndex.php"
                    style="position: relative; width: 100%;  ">
                </div>
            </div>
            <!-- END OF CONTENT -->
            <!-- START OF FOOTER -->
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Copyright © 2013
                </h3>
                <div id ="full">
                    <a href="http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php" data-transition="fade" rel="external">
                        Full Site
                    </a>
                </div>
            </div>
            <!-- END OF FOOTER -->
        </div>
        <!-- END OF PROJECTS PAGE -->
        <!-- Services -->
        <div data-role="page" id="Services">
            <div data-theme="a" data-role="header">
                <img id="logo" src="images/logo.png" alt="Logo" /> 
                <div id="header">
                <h3>Personal Portfolio</h3>
                </div>
            </div>
            <!-- NAVBAR -->
            <div data-role="navbar" data-iconpos="top">
                <ul>
                    <li>
                        <a href="#Home" data-transition="fade" data-theme="a" data-icon="home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#About" data-transition="fade" data-theme="a" data-icon="grid">
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="#Contact" data-transition="fade" data-theme="a" data-icon="edit">
                            Contact Me
                        </a>
                    </li>
                    <li>
                        <a href="#BusinessContacts" data-transition="fade" data-theme="a" data-icon="info">
                            Business Contacts
                        </a>
                    </li>
                    <li>
                        <a href="#Login" data-transition="fade" data-theme="a" data-icon="plus">
                            Login
                        </a>
                    </li> 
                    <li>
                        <a href="#page1" data-transition="fade" data-theme="a" data-icon="back" data-rel="back">
                            Back
                        </a>
                    </li>
                </ul>
             </div>
            <!-- END OF NAVBAR -->
            <!-- START OF CONTENT -->
            <div data-role="content">
            <div id ="content">
                <h2>Services</h2>   
                <p> I am able to create fast and efficient, mobile-friendly websites with HTML5, CSS3, PHP and JS. I am also able to integrate SQL databases into websites as well. </br>         </p>
                <h3>Addtional Information</h3>
                <p> Programming: Database design and implementation, object oriented programming, and web-based programming languages.</br>
                    Languages: Knowledgeable in Java, Python, C, C++, C#, JCL, and Visual Basic.</br>
                    Proficient in HTML5, CSS3, PHP, and SQL.</br>
                    Software: Aptana, NetBeans, Blue J, MySQL, DB2, Microsoft Office, and Microsoft Visual Studio 2012 </br>  
                    Operating Systems: Windows XP/Vista/7, MAC OS X </br>
                </div>
            </div>
            <!-- END OF CONTENT -->
            <!-- START OF FOOTER -->
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Copyright © 2013
                </h3>
                <div id ="full">
                    <a href="http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php" data-transition="fade" rel="external">
                        Full Site
                    </a>
                </div>
            </div>
            <!-- END OF FOOTER -->
        </div>
        <!-- END OF SERVICES PAGE -->
        <!-- START OF BUSINESS CONTACTS -->
        <div data-role="page" id="BusinessContacts">
            <div data-theme="a" data-role="header">
                <img id="logo" src="images/logo.png" alt="Logo" /> 
                <div id="header">
                <h3>Personal Portfolio</h3>
                </div>
            </div>
            <!-- NAVBAR -->
            <div data-role="navbar" data-iconpos="top">
                <ul>
                    <li>
                        <a href="#Home" data-transition="fade" data-theme="a" data-icon="home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#About" data-transition="fade" data-theme="a" data-icon="grid">
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="#Contact" data-transition="fade" data-theme="a" data-icon="edit">
                            Contact Me
                        </a>
                    </li>
                    <li>
                        <a href="#BusinessContacts" data-transition="fade" data-theme="a" data-icon="info">
                            Business Contacts
                        </a>
                    </li>
                    <li>
                        <a href="#Login" data-transition="fade" data-theme="a" data-icon="plus">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="#page1" data-transition="fade" data-theme="a" data-icon="back" data-rel="back">
                            Back
                        </a>
                    </li>
                </ul>
             </div>
            <!-- END OF NAVBAR -->
            <!-- START OF CONTENT -->
            <div data-role="content">
            <div id ="content">

                </div>
            </div>
            <!-- END OF CONTENT -->
            <!-- START OF FOOTER -->
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Copyright © 2013
                </h3>
                <div id ="full">
                    <a href="http://webdesign4.georgianc.on.ca/~200231116/Project1/Home.php" data-transition="fade" rel="external">
                        Full Site
                    </a>
                </div>
            </div>
            <!-- END OF FOOTER -->
        </div>
        <!-- END OF BUSINESS CONTACTS PAGE -->
        <script defer src="javascript/jquery.flexslider.js"></script>

        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });
        </script>
    </body>
</html>
