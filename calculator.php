<!doctype html>
<html lang="en">
<head>  
<meta charset="UTF-8">
<title>Calculator</title>
    <style> 
        h1 {
            width:350px;
            margin:0 auto;
            text-align: center;
        }
        
        h2 {
            text-align: center;
        }
        
        h3 {
            color: black;
        }
                
        form {
             width:350px;
             margin:0 auto; 
             background-color: beige;
             color: black;
        }
        
        input[type=text] {
            width:100%;  
            color: black;
        }
        
        input {
            margin-bottom: 10px;
        }
        
        fieldset {
            color:#666;
            padding:10px 15px 10px 10px;    
        }

        label {
            display:block;
            margin-bottom:5px;
        }
        
        li {
            color: black;
            list-style-type: none;
        }
        
        .center {
        text-align:center;
        }
        
    </style>
</head>

<body>

<h1>Our Calculator</h1>

<form action="" method="post">
<fieldset> 
    
    <label><h3>How many miles will you be driving</h3></label>
    <input type="text" name="distance" >
    
        <label><h3>Price per gallon </h3></label>
    <ul>  
        <li><input type="radio" name="gallonPrice" 
        value="3.00" 
        <?php if(isset($_POST['gallonPrice']) && $_POST['gallonPrice'] == '3.00') echo 'checked="checked"'; ?>
        >$3.00 </li>

        <li><input type="radio" name="gallonPrice" 
        value="3.50" 
        <?php if(isset($_POST['gallonPrice']) && $_POST['gallonPrice'] == '3.50') echo 'checked="checked"'; ?>
        >$3.50 </li>
        
        <li><input type="radio" name="gallonPrice" 
        value="4.00" 
        <?php if(isset($_POST['gallonPrice']) && $_POST['gallonPrice'] == '4.00') echo 'checked="checked"'; ?>
        >$4.00 </li>
     </ul>
   
<label><h3>Fuel Efficiency</h3></label>
<select name="efficiency">

<option value="NULL"
<?php if(isset($_POST['efficiency']) && $_POST == 'NULL') {
echo 'selected = "unselected"';
} ?>   >Select one</option>

<option value="10"
<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10') {
echo 'selected = "selected"';
} ?>   >Terrible at 10 mpg</option>

<option value="20"
<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20') {
echo 'selected = "selected"';
} ?>   >Better at 20 mpg</option>

<option value="30"
<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30') {
echo 'selected = "selected"';
} ?>   >Okay at 30 mpg</option>

<option value="40"
<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40') {
echo 'selected = "selected"';
} ?>   >Great at 40 mpg</option>
</select>

     <p><input type="submit" name="submit" value="Calculate!" /> <a href=""> Reset </a> </p>
    
</fieldset> 

</form>

<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    
if (empty($_POST ['distance'])){
echo '<h2>Error!</h2>';
 
} 
  
if (empty($_POST ['gallonPrice'])){
echo '<p>Please enter a valid distance, price per gallon and fuel efficiency</p>';
 
} 

elseif(isset($_POST['distance'],
        $_POST['gallonPrice'],
        $_POST['efficiency'])&& 
        is_numeric($_POST['distance']) &&
        is_numeric($_POST['gallonPrice']) &&
        is_numeric($_POST['efficiency'])) {

        // asign the vlaue to a vairable //
             $distance = $_POST['distance'];
             $gallonPrice = $_POST['gallonPrice'];
             $efficiency = $_POST['efficiency'];
             
    //next step is the arithmethic // 
        $gallons = $distance / $efficiency;
        $dollars = $gallons * $gallonPrice;
        $dollars_f = number_format($dollars, 2);
    
            
    echo '<h2>Calculator Results</h2>';
    
    echo '<p>You will be driving '.$distance.' miles</p>';
    
    echo '<p>Your vehicle has an efficiency rating of '.$efficiency.' miles per gallon</p>';
    
    echo '<p>Your total cost for gas will be $'.$dollars_f.'</p>';

} // if isset
       
} // close server

?>
</body>
 </html>