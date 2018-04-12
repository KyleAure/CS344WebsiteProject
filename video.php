<?php
include 'inc/header.php'
?>

<!DOCTYPE html>
<html lang="en">
    <title>Video</title>
    <meta name="author" content="Tristin Harvell">
    <meta name="description" content="Informative video page for internet addiction">
    <meta name="keywords" content="Internet, addiction, phones, life, time, boredom">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/stylesheet.css">

    <body>
        <!-- Navbar -->
        <?php echo printHeader(); ?>
        <!-- Navbar on small screens -->

        <!-- First Video -->
        <div class="video-one-container">
            <h1 class="video-one-title">Internet Addiction Overview</h1>
            <iframe width="420" height="315" id="video-one"
                    src="https://www.youtube.com/watch?v=vOSYmLER664">
            </iframe>
        </div>

        <!-- Second Video -->
        <div class="video-two-container">
            <h1 class="video-two-title">What You Miss With Internet Addiction</h1>
            <iframe width="420" height="315" id="video-two"
                    src="https://www.youtube.com/watch?v=TAIxb42FjwE">
            </iframe>
        </div>

        <!-- Third Video -->
        <div class="video-three-container">
            <h1 class="video-three-title">How Smartphones Change The Way You Think</h1>
            <iframe width="420" height="315" id="video-three"
                    src="https://www.youtube.com/watch?v=pWvSwX-jq7o">
            </iframe>
        </div>

        <!-- Footer -->
        <?php echo printFooter(); ?>

    </body>

</html>
