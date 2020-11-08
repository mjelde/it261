<?php include('config.php'); 
include('includes/header.php');

?>



    <div id="wrapper">
    
    <h1 class="<?php echo $center; ?>"><?php echo $mainHeadline; ?></h1>
<!--    <img src="images/photo2.jpg" alt="Seattle Skyline">-->
        <?php
        
        echo '<img src="'.$selectedImages.'">';
        
        ?>
        
        <blockquote>
        "Seattle, a city on Puget Sound in the Pacific Northwest, is surrounded by water, mountains and evergreen forests, and contains thousands of acres of parkland. Washington State’s largest city, it’s home to a large tech industry, with Microsoft and Amazon headquartered in its metropolitan area. The futuristic Space Needle, a 1962 World’s Fair legacy, is its most iconic landmark." ― Google
        </blockquote>
        
        <p><a href="https://github.com/lcared/it261/tree/wk6WebsiteConfigIndexPage">Sharon's GitHub with Config and Index files</a></p>

    
<?php include('includes/footer.php');
?>
