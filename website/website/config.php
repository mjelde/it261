<?php

//ob_start();  // prevents header errors 
//define('DEBUG', 'TRUE');   // we want to see our errors
//
//include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Our gallery php

$people['Seattle_Aquarium'] = 'aquar_Seattle Aquarium Built in 1977';
$people['Seattle_Art_Museum'] = 'artmu_Seattle Art Museum Built in 1933';
$people['Seattle_Ballet'] = 'balle_Seattle Ballet started in 1972';
$people['Pacific_Science'] = 'cente_Pacific Science Center Built in 1962';
$people['Flight_Museum'] = 'fligh_Boeing Museum of Flight was Built in 1909';
$people['Glass_Museum'] = 'glass_Chihuly Garden and Glass Opened in 2012';
$people['Seattle_Library'] = 'libra_Seattle Main Library Built in 2004';
$people['Tmobile_Park'] = 'mobil_T-Mobile Park was Built in 1999';
$people['Seattle_Monorail'] = 'monor_Seattle Monorail was Built in 1962';
$people['Museum_Pop_Culture'] = 'mopop_Museum of Pop Culture was Built in 2000';
$people['Pike_Place'] = 'place_Pike Place Market was Built in 1907';
$people['Smith_Tower'] = 'smith_Smith Tower was Built in 1911';
$people['Space_Needle'] = 'space_Seattle Space Needle was Built in 1961';
$people['Great_Wheel'] = 'wheel_Seattle Great Wheel was Built in 2012';



switch(THIS_PAGE) {
    case 'index.php' :    
       $title = 'Seattle';
       $mainHeadline = 'Make Seattle Home';
       $center = 'center';
       $body = 'home';
       break;
        
    case 'about.php' :    
       $title = 'About Page';
       $mainHeadline = 'Seattle Pike Place Market';
       $center = 'center';
       $body = 'about inner';
       break;

    case 'daily.php' :    
       $title = 'Daily Page';
       $mainHeadline = 'Seattle Great Wheel';
       $center = 'center';
       $body = 'daily inner';
       break;

    case 'customers.php' :    
       $title = 'The 12s';
       $mainHeadline = 'Home of the 12s';
       $center = 'center';
       $body = 'customers inner';
       break;

    case 'contact.php' :    
       $title = 'Contact';
       $mainHeadline = 'Join Seattle Wine Club Mailing List';
//       $center = 'center';
       $body = 'contact inner';
       break;
        
    case 'thx.php' :    
       $title = 'Thank you!';
       $mainHeadline = 'Thank you for joining the mailing list!';
//       $center = 'center';
       $body = 'thx inner';
       break;

    case 'gallery.php' :    
       $title = 'Gallery';
       $mainHeadline = 'Top places to visit in Seattle';
       $center = 'center';
       $body = 'gallery inner';
       break;
        
        
} // end switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function makeLinks($nav) {
    $myReturn = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
    $myReturn .= '<li><a href=" '.$key.' " class="active">'.$value.'</a></li>';
    
    
} else {
    $myReturn .= '<li><a href=" '.$key.' ">'.$value.'</a></li>';
    
} // end else

} // end foreach
return $myReturn;
}  //end function

// start rand function for pictures on home page

    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';
    $photos[3] = 'photo4';
    $photos[4] = 'photo5';
    $photos[5] = 'photo6';
    $photos[6] = 'photo7';

    $i = rand(0, count($photos)-1);
    $selectedImages = 'images/'.$photos[$i].'.jpg';

// end rand function for picture on the home page


// the start of the emailable form

$firstName = '';
$lastName = '';
$email = '';
$tel = '';
$gender = '';
$wines = '';
$privacy = '';
$comments = '';


$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$telErr = '';
$genderErr = '';
$winesErr = '';
$privacyErr = '';
$commentsErr = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['firstName'])) {
$firstNameErr = 'Please fill out your first name';
} else {
$firstName = $_POST['firstName'];
}
    
if(empty($_POST['lastName'])) {
$lastNameErr = 'Please fill out your last name';
} else {
$lastName = $_POST['lastName'];
}
    
if(empty($_POST['email'])) {
$emailErr = 'Please fill out your email';
} else {
$email = $_POST['email'];
}
   
if(empty($_POST['gender'])) {
$genderErr = 'Please check one!';
} else {
$gender = $_POST['gender']; 
}
    
    if($gender == 'male') {
        $male = 'checked';
    }    elseif($gender == 'female') {
            $female = 'checked';
    }
    
    
if(empty($_POST['wines'])) {
$winesErr = 'Please select a wine';
} else {
$wines = $_POST['wines']; 
}
 
if(empty($_POST['comments'])) {
$commentsErr = 'Please give your comments';
} else {
$comments = $_POST['comments']; 
}
    
if(empty($_POST['privacy'])) {
$privacyErr = 'Please agree to our Privacy Policy!';
} else {
$privacy = $_POST['privacy']; 
}
    

function myWines() {
    $myReturn = '';
  if(!empty($_POST['wines'])) {
    $myReturn = implode(',', $_POST['wines']);

}  return $myReturn; // end if
    
} // end function

    
if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Your phone number please!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Invalid format!';
} else{
$tel = $_POST['tel'];
}
}
    
    
if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['gender'],
        $_POST['wines'],
        $_POST['comments'],
        $_POST['tel'],
        $_POST['privacy'])) { 
  $to = 'sharonlamar@gmail.com';
  $subject = 'Test Email ' .date('m/d/y');
  $body = ''.$firstName.' has filled out your form '.PHP_EOL.'';
  $body .= 'Email: '.$email.' '.PHP_EOL.'';
  $body .= 'Your phone number: '.$tel.' '.PHP_EOL.'';
  $body .= 'Your Wines: '.myWines().''.PHP_EOL.'';
  $body .= 'Gender: '.$gender.' '.PHP_EOL.'';
  $body .= 'Comments: '.$comments.'';
    
  $headers = array(
  'From' => 'no-reply@lca.red',
  'Reply-to' => ''.$email.'');
    
    mail($to, $subject, $body, $headers);
    header('Location: thx.php');
    
    
} // end isset
    
// Please remember this is placed at the bottom of config file

//function myerror($myFile, $myLine, $errorMsg)
//
//  if(defined('DEBUG') && DEBUG)  {
//      
//      echo 'Error in file: <b> '.$myFile,' </b> on line: <b> '.$myLine.' </b>';
//      echo 'Error message: <b> '.$errorMsg.'</b>';
//      die();
//  }  else {
//      echo ' Houston we have a problem!';
//      die();
//  }




} // close if $_SERVER request method

?>