<?php
// people.php
include('config.php');
include('includes/header.php');
// We are connecting to our database!!

?>
<main>
 <?php
$sql = 'SELECT * FROM People';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) { // show the records
  while($row = mysqli_fetch_assoc($result)) {
      //this array will display the contents of the row
      echo '<ul>';  // use a similar href's value that we used for the switch assignment
      echo '<li class="bold">For more information <a href="people-view.php?id='.$row['PeopleID'].' ">'.$row['FirstName'].' </a></li>';
      echo '<li>'.$row['LastName'].'</li>';
      echo '<li>'.$row['Occupation'].'</li>';
      echo '</ul>';
  }  // closing the while

}  else {
    
    echo 'Nobody home!';


}  //else

// release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
    
?>
</main>
<aside>
<h3>These are excellent places to live and work in and around Seattle.</h3>
</aside>
<div> <!--div opening tag to fix the page-->
<?php
include('includes/footer.php');

?>