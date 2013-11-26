<!--
File name: Logout.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Logout Page to close connection.
-->

<?php
$page = "Login";
include('ConnectVars.php');
include('header.php');
include('Content.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//If user is signed in, log out
if($_SESSION['signed_in'] == true)
{
	//unset all variables
	$_SESSION['signed_in'] = NULL;
	$_SESSION['admin_username'] = NULL;

	echo 'Succesfully signed out.';
        
        header( 'Location: http://webdesign4.georgianc.on.ca/~200231116/AdvancedWebAssignment2/Home.php' ) ;
        close();
        
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
