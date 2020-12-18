<?php
// server page
session_start();
include('config2.php');

// initilize the variables

$FirstName = '';
$LastName = '';
$UserName = '';
$Email = '';
$errors = array();
$success = 'You are now logged in!';

// connect to the database


$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// EXT REGISTER THE USER //

// REGISTER THE USER

if(isset($_POST['reg_user'])) {
// lets receive all the information    
$FirstName = mysqli_real_escape_string($db, $_POST['FirstName']); 
$LastName = mysqli_real_escape_string($db, $_POST['LastName']);
$UserName = mysqli_real_escape_string($db, $_POST['UserName']);
$Email = mysqli_real_escape_string($db, $_POST['Email']);
$Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
$Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);  
    
// the array push function will be able to add the exact error we will be referring to    
    
if(empty($FirstName))  {
    array_push($errors, 'First name is required');
}
  
if(empty($LastName))  {
    array_push($errors, 'Last name is required');
}    
 
if(empty($Email))  {
    array_push($errors, 'Email is required');
} 

if(empty($UserName))  {
    array_push($errors, 'Username is required');
}
 
if(empty($Password_1))  {
    array_push($errors, 'Password is required');
}
    
if($Password_1 != $Password_2)  {
    array_push($errors, 'Passwords do not match!');
}
    
// check to see if there is a username or email that is out there 
    
$user_check_query = "SELECT * FROM Users WHERE UserName= '$UserName' OR Email = '$Email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
    
if($user) {
    if($user['UserName'] == $UserName ) {
        array_push($errors, 'Username already exists');
    }

    if($user['Email'] == $Email ) {
        array_push($errors, 'Email already exists');
    }
    
    
} // closes that first if

// if everything is ok and there are no errors we can proceed
    
if(count($errors) == 0) {
$Password = md5($Password_1);
    
$query = "INSERT INTO Users (FirstName, LastName, UserName, Email, Password) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password')  ";
mysqli_query($db, $query);
    
    $_SESSION['UserName'] = $UserName;
    $_SESSION['success'] = $success;

header('Location: login.php');
    
}  // end count
  
    
    
    
} // close isset


// we will return to the server.php page to enter the login information

if(isset($_POST['login_user'])) {
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']); 
    $Password = mysqli_real_escape_string($db, $_POST['Password']); 
    
if(empty($UserName))  {
    array_push($errors, 'Username is required');
}
if(empty($Password))  {
    array_push($errors, 'Password is required');
}
if(count($errors) == 0) {
$Password = md5($Password);    
$query = "SELECT * FROM Users WHERE username = '$UserName' AND password = '$Password' ";

$results = mysqli_query($db, $query);

if(mysqli_num_rows($results) == 1) {
    $_SESSION['UserName'] = $UserName;
    $_SESSION['success'] = $success;

header('Location: index.php');

} else {
    array_push($errors, 'Wrong username/password combination') ;
}
    
}  // if count
    
} // close isset





