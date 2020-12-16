<?php include('config.php'); 
?>

<?php  // in order to view this page a user must have registered and logged in, otherwise they must be directed to do so

session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location: login.php');
} 

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include('includes/header.php');
?>

<?php 
// notification message
if(isset($_SESSION['success'])) : ?>
<div class="error success">
<h3>
<?php 
    echo $_SESSION['success'];
    unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>

<div class="error success">
<?php
    if(isset($_SESSION['UserName'])) : ?>
<h3> Hello
<?php echo $_SESSION['UserName'];   ?>
</h3>
<br>
<p><a href="index.php?logout='1'">Log out</a></p>
</div>
<?php endif ?>
<!-- end registration message -->


    <div id="wrapper">
    
    <h1 class="<?php echo $center; ?>"><?php echo $mainHeadline; ?></h1>
<!--    <img src="images/photo2.jpg" alt="Seattle Skyline">-->
        <?php
        
        echo '<img src="'.$selectedImages.'">';
        
        ?>
        
        <blockquote>
        Seattle is a great place to live and raise a family.  From Downtown to Mount Rainier there are so many wonderful sights to see, places to visit, and homes to purchase.  Come play and make Seattle home!        
        </blockquote>
                
        <blockquote>
        "Seattle, a city on Puget Sound in the Pacific Northwest, is surrounded by water, mountains and evergreen forests, and contains thousands of acres of parkland. Washington State’s largest city, it’s home to a large tech industry, with Microsoft and Amazon headquartered in its metropolitan area. The futuristic Space Needle, a 1962 World’s Fair legacy, is its most iconic landmark." ― Google
        </blockquote>
        
        <p><a href="https://github.com/lcared/it261/tree/finalproject">Sharon's GitHub Repo for the Final Project</a></p>

    
<?php include('includes/footer.php');
?>
