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
        width:350px;
        margin:0 auto;
        text-align: center;
        color: red;
        }
        
        h3 {
            color: black;
        }
        
        form {
             width:350px;
             margin:0 auto; 
             background-color: beige;
             color: black;
             margin-bottom: 20px;
        }
        
        input[type=text] {
            width:100%; 
            color: black;
        }
        
        input {
            margin-bottom: 10px;
        }
        
        fieldset {
            color:black;
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
        
        .box{
            width:330px;
            margin:0 auto;
            padding:10px;
            border:1px solid #666;
        }
        
        h5 {
            width:330px;
            margin:0 auto;
            padding:10px;
            border:1px solid #666;    
        }
        
        
        
    </style>
</head>

<body>

<h1>Our Calculator</h1>

<form action="" method="post">
<fieldset> 

    <label>Name</label>
    <input type="text" name="name">

    <label>How many miles will you be driving?</label>
    <input type="text" name="distance">

    <label>How many hours per day would you like to be driving?</label>
    <input type="text" name="hours_day">
    
        <label>Price per gallon</label>
    <ul>  
        <li><input type="radio" name="gallon_price" 
        value="3.00" 
        <?php if(isset($_POST['gallon_price']) && $_POST['gallon_price'] == '3.00') echo 'checked="checked"'; ?>
        >$3.00 </li>

        <li><input type="radio" name="gallon_price" 
        value="3.50" 
        <?php if(isset($_POST['gallon_price']) && $_POST['gallon_price'] == '3.50') echo 'checked="checked"'; ?>
        >$3.50 </li>
        
        <li><input type="radio" name="gallon_price" 
        value="4.00" 
        <?php if(isset($_POST['gallon_price']) && $_POST['gallon_price'] == '4.00') echo 'checked="checked"'; ?>
        >$4.00 </li>
     </ul>
   
<label>Fuel Efficiency</label>
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

     <p><input type="submit" name="submit" value="Calculate" /> <a href=""> Reset </a> </p>
    
</fieldset> 

</form>

<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    
if (empty($_POST ['distance'])){
echo '<h2>Error!</h2>';
 
} 
  
if (empty($_POST ['gallon_price'])){
echo '<h5>Please enter a valid distance, price per gallon and fuel efficiency</h5>';
 
} 

if(isset(
    $_POST['name'],
    $_POST['distance'],
    $_POST['hours_day'],
    $_POST['gallon_price'],
    $_POST['efficiency'],
    $_POST['distance'])&&
        is_numeric($_POST['distance']) &&
        is_numeric($_POST['gallon_price']) &&
        is_numeric($_POST['hours_day']) &&
        is_numeric($_POST['efficiency'])) {
    
             // assign the value to variable //

            $distance = $_POST['distance'];
            $hours_day = $_POST['hours_day'];
            $gallon_price = $_POST['gallon_price'];
            $efficiency = $_POST['efficiency'];
             
    //next step is the math // 
        $gallons = $distance / $efficiency;
        $dollars = $gallons * $gallon_price;
        $dollars_f = number_format($dollars, 2);
    
        $hours = $distance/65;
        $total_days = $hours / $hours_day;
        $total_days_f = number_format($total_days, 1); 
        $hours_f = number_format($hours, 1); 
        $name = $_POST['name'];   

?>


    <div class="box">
    <?php

    echo '<h2>Calculator Results</h2>';
    
    echo '<p>You will be driving '.$distance.' miles</p>';
    
    echo '<p>Your vehicle has an efficiency rating of '.$efficiency.' miles per gallon</p>';
    
    echo '<p>Your total cost for gas will be $'.$dollars_f.'</p>';
    
    echo '<p>You will be driving a total of '.$hours_f.' hours equating to '.$total_days_f.' days</p>';

} // close error

} // close server

?>
    </div>
</body>
 </html>