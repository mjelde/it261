<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

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
       $mainHeadline = 'Mt. Rainier';
       $center = 'center';
       $body = 'contact inner';
       break;

    case 'gallery.php' :    
       $title = 'Gallery';
       $mainHeadline = 'The Museum of Pop Culture';
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

?>