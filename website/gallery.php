<?php include('config.php'); 
include('includes/header.php');

?>



    <div id="wrapper">
    
<main>
    <h1><?php echo $mainHeadline; ?></h1>
        <table class="candidates">
        <?php foreach($places as $fullName => $image) : ?>
        <tr>
        <td>
        <img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo $fullName; ?>">        
        </td>    
        <td>
        <?php echo str_replace('_', ' ',$fullName); ?>

        </td>    
        <td>
        <?php echo substr($image, 6);  ?>

        </td>    
        <td>
<img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo $fullName; ?>">

        </td> 

        </tr>
        <?php endforeach ; ?>
        </table>
</main>

<aside>
<h3>Sight of the Day</h3>
    
    <?php 
    
    $photos[0] = 'aquar';
    $photos[1] = 'artmu';
    $photos[2] = 'balle';
    $photos[3] = 'cente';
    $photos[4] = 'fligh';
    $photos[5] = 'glass';
    $photos[6] = 'libra';
    $photos[7] = 'mobil';
    $photos[8] = 'monor';
    $photos[9] = 'mopop';
    $photos[10] = 'place';
    $photos[11] = 'smith';
    $photos[12] = 'space';
    $photos[12] = 'wheel';

    $i = rand(0, count($photos)-1);
    $candidates = 'images/'.$photos[$i].'.jpg';
    
    echo '<img src="'.$candidates.'">';
    
    ?>
    
    <p>Great Places in Seattle</p>
</aside>
    
<?php include('includes/footer.php');
?>
