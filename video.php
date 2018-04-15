<!-- Tristin Harvell's video.php page -->
<?php
//TODO: Change reporting method after testing has been completed.
error_reporting(E_ALL);
ini_set('display_errors', E_ALL);

//Other PHP includes should go here

?>

<!DOCTYPE html>
<html lang="en">
<title>Video</title>
<!-- Meta Tags -->
<meta name="author" content="Tristin Harvell">
<meta name="description" content="Informative video page for internet addiction">
<meta name="keywords" content="Internet, addiction, phones, life, time, boredom">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style Links -->
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="shortcut icon" type="image/png" href="assets/favicon.png">
<!-- Script Links -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/header.js"></script>
<!-- Include Header -->
<?php include_once 'inc/header.php'; ?>

    <body>
        <article>

            <!-- First Video -->
            <div id="video-one-container">
                <h1 id="video-one-title">Internet Addiction Overview</h1>
                <iframe width="420" height="315" id="video-one"
                        src="https://www.youtube.com/watch?v=vOSYmLER664">
                </iframe>
            </div>

            <!-- Second Video -->
            <div id="video-two-container">
                <h1 id="video-two-title">What You Miss With Internet Addiction</h1>
                <iframe width="420" height="315" id="video-two"
                        src="https://www.youtube.com/watch?v=TAIxb42FjwE">
                </iframe>
            </div>

            <!-- Third Video -->
            <div id="video-three-container">
                <h1 id="video-three-title">How Smartphones Change The Way You Think</h1>
                <iframe width="420" height="315" id="video-three"
                        src="https://www.youtube.com/watch?v=pWvSwX-jq7o">
                </iframe>
            </div>

        </article>

        <!-- Footer -->
        <?php echo printFooter(); ?>

    </body>

</html>
