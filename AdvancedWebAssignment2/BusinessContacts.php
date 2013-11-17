<!--
File name: BusinessContacts.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Business Contacts page of personal portfolio website.
-->

<?php
$page = "Home";

include('header.php');


if($_SESSION['signed_in'] == false)
{
	//the user is not signed in
	?>
         <script type="text/javascript">;
         alert("Sorry, you have to be signed in to view the Business Contacts page.");
         history.back();
         </script>;  
        <?php
        
}
?>


    
<?php
include('sideContent.php');
?>


<?php
include('mainContent.php');
?>


<?php
include ('footer.php');
?>
