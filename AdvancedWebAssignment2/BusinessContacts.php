<!--
File name: BusinessContacts.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Business Contacts page of personal portfolio website.
-->

<?php
$page = "BusinessContacts";

include('header.php');
include('ConnectVars.php');

//if($_SESSION['signed_in'] == false)
//{
//	//the user is not signed in
	?>
         <script type="text/javascript">
     //    alert("Sorry, you have to be signed in to view the Business Contacts page.");
      //   history.back();
         </script>  
        <?php
        
//}
        
// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "SELECT contact_name, contact_email, contact_address, contact_homePhone, contact_workPhone FROM BusinessContacts ORDER BY contact_name ASC";
$data = mysqli_query($dbc, $query);

    while ($row = mysqli_fetch_array($data))
    {     
        echo '<table>';
        
        echo '<tr><td class="label">Contact Name: ' . $row['contact_name'] . '</td></tr>';    
        
        echo '</table>';
}

  mysqli_close($dbc);
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
