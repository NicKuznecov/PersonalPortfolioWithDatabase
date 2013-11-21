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

if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo 'You are already signed in, you can <a href="Logout.php">log out</a> if you want.';
}
else
{	
    if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		echo '<form method="post" action="">
			Username: <input type="text" name="admin_username" /></br>
			Password: <input type="password" name="admin_password"></br>
			<input type="submit" value="Log In" />
                      </form>';
	}
	else
	{
                $errors = array();
                
		if(!isset($_POST['admin_username']))
		{
			$errors[] = 'The username field must not be empty.';
		}
		
		if(!isset($_POST['admin_password']))
		{
			$errors[] = 'The password field must not be empty.';
		}
                		
		if(!empty($errors))
		{
			echo 'The username and password field must not be empty.';
			echo '<ul>';
			foreach($errors as $key => $value) 
			{
				echo '<li>' . $value . '</li>';
			}
			echo '</ul>';
                }
		else
		{

			$query = "SELECT 
						
						admin_username,
						admin_password
					FROM
						admin
					WHERE
						admin_username = '" . mysqli_real_escape_string($dbc, ($_POST['admin_username'])) . "'
					AND
						admin_password = '" . ($_POST['admin_password']) . "'";
						
			$result = mysqli_query($dbc, $query);
			if(!$result)
			{
				//something went wrong, display the error
				echo 'Something went wrong while signing in. Please try again later.';
			        //echo mysql_error(); 
			}
			else
			{
				
				if(mysqli_num_rows($result) == 0)
				{
					echo 'You have supplied a wrong username/password combination.';
                                       
				}
				else
				{
					//set the $_SESSION['signed_in'] variable to TRUE
					$_SESSION['signed_in'] = true;
					
					while($row = mysqli_fetch_assoc($result))
					{
						$_SESSION['admin_username'] = $row['admin_username'];
					}
					
					echo 'Welcome, ' . $_SESSION['admin_username'] . '. <a href="BusinessContacts.php">Proceed to the Business Contacts</a>.';
                                      
                                        
                                        
                                }
			}
		}
       }
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
