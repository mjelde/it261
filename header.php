<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title;  ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php echo $body ; ?>">
    <header>
        <div class="inner-header">
            <img id="logo" src="images/logo.jpg" alt="logo">
    <nav>

    <ul>
    <?php echo makeLinks($nav) ; ?>

    </ul>
        
    </nav>
        </div> <!--end inner header-->
    </header>
    