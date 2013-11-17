<!--
File name: Login.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Login Page to gain access to the Business Contacts Page.
-->

<?php
$page = "Login";

include('header.php');

		echo '<form method="post" action="">
			Username: <input type="text" name="user_name" /></br>
			Password: <input type="password" name="user_pass"></br>
			<input type="submit" value="Log In" />
                      </form>';
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
