<?php
//TODO: Change reporting method after testing has been completed.
error_reporting(E_ALL);
ini_set('display_errors', E_ALL);

//Other PHP includes should go here

?>

<!DOCTYPE html>
<html>

<head>
<title>Contact Us</title>
<!-- Meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Kyle Aure">
<meta name="description" content="Contact us page to give users a way to contact the authors">
<meta name="keywords" content="Internet, addiction, phones, life, time, boredom, contact">
<!-- Style links -->
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="shortcut icon" href="assets/favicon.ico">
<link rel="shortcut icon" type="image/png" href="assets/favicon.png">
<!-- Script links -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/header.js"></script>
</head>
    
<?php include 'inc/header.php'; ?>

<body>
    <div class="bannerimage">
        <img src="assets/bannerimage1.jpg" onload="this.width=screen.width;" alt="bannerimage1">
        <h1>WELCOME!</h1>
        <h2>
            <?php
                echo $_POST['firstname'] . " " . $_POST['lastname'];
            ?>
        </h2>
    </div>
    <div class="confirmRegistration">
        <h1>Your registration was successful!</h1>
        <p>We will be reaching out to you shortly at <?php echo $_POST['email']?> with more information </p>
        <p>In the mean time check us out on our social media accounts.</p>
    
        <div class="socialmedia">
            <ul>
                <li><a href="https://www.facebook.com/" name="facebook"><img src="assets/socialmedia/facebook.png"></a></li>
                <li><a href="https://www.instagram.com/" name="instagram"><img src="assets/socialmedia/instagram.png"></a></li>
                <li><a href="https://twitter.com/" name="twitter"><img src="assets/socialmedia/twitter.png"></a></li>
            </ul>
        </div>
    </div>
</body>
</html>