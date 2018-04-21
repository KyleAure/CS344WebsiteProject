<?php
//TODO: Change reporting method after testing has been completed.
error_reporting(E_ALL);
ini_set('display_errors', E_ALL);

//Other PHP includes should go here

?>

<!DOCTYPE html>
<html>
<title>History</title>
<!-- Meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style links -->
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="shortcut icon" type="image/png" href="assets/favicon.png">
<!-- Script links -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/header.js"></script>
<!-- Include Header -->
<?php include_once 'inc/header.php'; ?>

<header>
  History of Internet Addiction
</header>

<div class="indexBox">
  <h1>Theory of Disorder</h1>
  <p><img class="historyPic" src="assets/ivan.jpg" alt="Dr. Ivan Goldbert" title="Dr. Ivan Goldberg"/></p>
  <p>
    Originally debated as a “real thing,” it was satirically theorized as a disorder in 1995 by Dr. Ivan Goldberg, M.D. who compared its original model to pathological gambling. 
    Since this hoax of sorts, the disorder has rapidly gained ground and has been given serious attention from many researchers, mental health counselors, and doctors as a truly debilitating disorder. 
  </p>
</div>

<br>

<div class="indexBox">
  <h1>State of Internet Addition Today</h1>
  <p>  
    Though not officially recognized as a disorder in the Diagnostic and Statistical Manual of Mental Disorders (DSM-IV), its prevalence in American and European cultures is staggering – affecting up to 8.2% of the general population. 
    However, some reports suggest it affects up to 38% of the general population. The widely variable difference in prevalence rates might be contributed to the fact that no true and standardized criteria has been selected for Internet Addiction Disorder. 
    It is researched differently among scientists and mental health professionals. And, it is researched differently across ethnic cultures.
  </p>
</div>

  <!-- Footer -->
<?php include_once 'inc/footer.php'; ?>
</body>
</html>
