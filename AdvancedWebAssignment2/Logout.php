<!--
File name: Login.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Login Page to gain access to the Business Contacts Page.
-->

<?php
$page = "Login";
include('ConnectVars.php');
include('header.php');
include('Content.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if($_SESSION['signed_in'] == true)
{
	//unset all variables
	$_SESSION['signed_in'] = NULL;
	$_SESSION['admin_username'] = NULL;

	echo 'Succesfully signed out.';
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
