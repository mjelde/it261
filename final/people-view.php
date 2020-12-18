<?php 
// people view page

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
} else {
    header('Location:people.php');
}


$sql = 'SELECT * FROM People WHERE PeopleID = '.$id.'';

// connect to DB

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) { // show the records
  while($row = mysqli_fetch_assoc($result)) {
    $FirstName = stripslashes($row['FirstName']); 
    $LastName = stripslashes($row['LastName']);
    $Occupation = stripslashes($row['Occupation']);
    $Email = stripslashes($row['Email']);
    $BirthDate = stripslashes($row['BirthDate']);
    $Description = stripslashes($row['Description']);
      $Feedback = '';
  }
    
}  else {
    $Feedback = 'Sorry, no places - they are full';
}

include('includes/header.php'); ?>

<main>
<h2>Welcome to <?php echo $FirstName;?>'s Page</h2>
<?php 
if($Feedback == '') {
    echo '<ul>';
    echo '<li><b>Location:</b> '.$FirstName.' </li>';
    echo '<li><b>Area Type:</b> '.$LastName.' </li>';
    echo '<li><b>Situated:</b> '.$Occupation.' </li>';
    echo '<li><b>Email:</b> '.$Email.' </li>';
    echo '<li><b>Founded:</b> '.$BirthDate.' </li>';
    echo '</ul>';
    echo '<p>'.$Description.'</p>';
    echo '<br>';
    echo '<p><a href="people.php">Go back to the Neighborhoods page!</a></p>';
}  else {
    echo $Feedback;
    
    
} // ends the else

?>

</main>

<aside>
<?php
    if($Feedback == '') {
        echo '<img src="uploads/people'.$id.'.jpg" alt="'.$FirstName.'">';
        
    } else {
        echo $Feedback;
    }
    
// release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
    
    
?>


</aside>

<?php
include('includes/footer.php');

?>