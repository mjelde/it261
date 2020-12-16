<?php

//ob_start();  // prevents header errors 
//define('DEBUG', 'TRUE');   // we want to see our errors
//
//include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Our gallery php

$people['Donald_Trump'] = 'trump_President from NY.';
$people['Joe_Biden'] = 'biden_Vice President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Senator from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Mayor from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Housing/Urban from TX.';




switch(THIS_PAGE) {
    case 'index.php' :    
       $title = 'Seattle';
       $mainHeadline = 'Make Seattle Home';
       $center = 'center';
       $body = 'home';
       break;
        
    case 'about.php' :    
       $title = 'Pike Place';
       $mainHeadline = 'Pike Place Market';
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
       $mainHeadline = 'Join Seattle Wine Lovers Mailing List';
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
       $mainHeadline = 'Welcome to the candidates gallery page';
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
$winesErr = 'What, no wines?';
} else {
$wines = $_POST['wines']; 
}
 
if(empty($_POST['comments'])) {
$commentsErr = 'Please include your comments!';
} else {
$comments = $_POST['comments']; 
}
    
if(empty($_POST['privacy'])) {
$privacyErr = 'Please agree to our Privacy Rules!';
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