<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset> 
    
    <label>First Name </label>
    <input type="text" name="firstName" value="<?php
    if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']) ; ?>">
    <span><?php echo $firstNameErr; ?></span>
    
    <label>Last Name </label>
    <input type="text" name="lastName" value="<?php
    if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']) ; ?>">
    <span><?php echo $lastNameErr; ?></span>
    
    <label>Email </label>
    <input type="email" name="email" value="<?php
    if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ; ?>">
    <span><?php echo $emailErr; ?></span>
    
    <label>Telephone </label>
    <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
    if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']) ; ?>">
    <span><?php echo $telErr; ?></span>
    
    
    <label>Gender: </label>
    <ul>  
    <!-- logic = we are still asking if post currency was set but now we are asking one more question - is the post currency equal to the value-->
        <li><input type="radio" name="gender" 
        value="female" 
        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>
        >Female </li>

        <li><input type="radio" name="gender" 
        value="male" 
        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
        >Male </li>
   
     </ul>
    <span><?php echo $genderErr; ?></span>

 <label>Neighborhoods:  </label>
    
 <ul>  

<li><input type="checkbox" name="wines[]" value="cabernet"
    <?php if(isset($_POST['wines'])&& $_POST['wines']== 'cabernet') echo 'checked ="checked" '; ?>
    >Capitol Hill</li>


    <li><input type="checkbox" name="wines[]" value="merlot"
    <?php if(isset($_POST['wines'])&& $_POST['wines']== 'merlot') echo 'checked ="checked" '; ?>
    >First Hill</li>

    <li><input type="checkbox" name="wines[]" value="syrah"
    <?php if(isset($_POST['wines'])&& $_POST['wines']== 'syrah') echo 'checked ="checked" '; ?>
    >Yesler Terrace</li>

    <li><input type="checkbox" name="wines[]" value="malbec"
    <?php if(isset($_POST['wines'])&& $_POST['wines']== 'malbec') echo 'checked ="checked" '; ?>
    >Cherry Hill</li>
     
    <li><input type="checkbox" name="wines[]" value="zinfandel"
    <?php if(isset($_POST['wines'])&& $_POST['wines']== 'zinfandel') echo 'checked ="checked" '; ?>
    >Queen Anne Hill</li>

</ul>

 <span><?php echo $winesErr; ?></span>
    

<label>Comments:</label>
<textarea name="comments" ><?php if(isset($_POST['comments'])) echo
htmlspecialchars($_POST['comments']);  ?></textarea>
<span><?php echo $commentsErr; ?></span>

<input type="radio" name="privacy" value="<?php 
if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']);?>"> 
I agree to the privacy policy. 
<span><?php echo $privacyErr; ?></span>
    
    
     <input type="submit" value="Submit">
     <p><a href="">Reset Form </a></p>
</fieldset> 

</form>