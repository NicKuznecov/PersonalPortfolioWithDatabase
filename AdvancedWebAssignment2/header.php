<!--
File name: header.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Header page which consists of the nav menu, and css/js includes. Also everything written after this page(header.php) and before sideContent.php will show up on the left div.
-->   


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="A short description." />
	<meta name="keywords" content="put, keywords, here" />
	<title>Personal Portfolio</title>
	<link rel="shortcut icon"  href="images/favicon.ico">
        <script src="javascript/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="javascript/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles/styles.css" type="text/css">
        <link rel="stylesheet" href="styles/orbit-1.2.3.css">
    
        <style>
                <?php echo "#".$page; ?>
                {
                    background-color: #100873;
                        
                }

        </style>
        <script type="text/javascript">
            <!--
            if (screen.width <= 699) {
            document.location = "mobile.php";
            }
            //-->
        </script>

        
</head>
<body>  
    <div id="logo">
    </div>
<div id="Content">    
    <div id="wrapper">
        <div id="menu">
            <a id="Home" class="item" href="Home.php">Home</a> 
            <a id="AboutMe" class="item" href="AboutMe.php">About Me</a> 
            <a id="Projects" class="item" href="Projects.php">Projects</a> 
            <a id="Services" class="item" href="Services.php">Services</a> 
            <a class="item" href="https://github.com/NicKuznecov"> Git Hub</a> 
            <a id="ContactMe" class="item" href="ContactMe.php">Contact Me</a>
            <a id="BusinessContacts" class="item" href="BusinessContacts.php">Business Contacts</a>
            <a id="Login" class="item" href="Login.php">Login</a>
        </div>
    </div>    
 