<?php
include 'inc/header.php'
?>

<!DOCTYPE html>
<html>
<title>Internet Addiction</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Arial", sans-serif
  }

  .w3-bar,
  h1,
  button {
    font-family: "Arial", sans-serif
  }

  .fa-anchor,
  .fa-coffee {
    font-size: 200px
  }
</style>

<body>
  <!-- Navbar -->
<php > </php>
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large"><a href="history.html" class="w3-bar-item w3-button w3-padding-large">History</a><a href="test.html" class="w3-bar-item w3-button w3-padding-large">Test</a><a href="causes.html" class="w3-bar-item w3-button w3-padding-large">Causes</a><a href="video.html" class="w3-bar-item w3-button w3-padding-large">Video</a></div>
  </div>
  <!-- First Grid -->
  <div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h1>Are You Addicted To The Internet?</h1>
        <h5 class="w3-padding-32">Internet addiction is described as an impulse control disorder, which does not involve use of an intoxicating drug and is very similar to pathological gambling. Some Internet users may develop an emotional attachment to on-line friends and activities
          they create on their computer screens. Internet users may enjoy aspects of the Internet that allow them to meet, socialize, and exchange ideas through the use of chat rooms, social networking websites, or "virtual communities." Other Internet
          users spend endless hours researching topics of interest Online or "blogging". Blogging is a contraction of the term "Web log", in which an individual will post commentaries and keep regular chronicle of events. It can be viewed as journaling
          and the entries are primarily textual. Similar to other addictions, those suffering from Internet addiction use the virtual fantasy world to connect with real people through the Internet, as a substitution for real-life human connection, which
          they are unable to achieve normally.</p>
      </div>
      <div class="w3-third w3-center"><i class="fa fa-anchor w3-padding-64 w3-text-red"></i></div>
    </div>
  </div>
  <!-- Second Grid -->
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center"><i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i></div>
      <div class="w3-twothird">
        <h1>How Can Someone Get Help?</h1>
        <h5 class="w3-padding-32">The first step is to determine if there is a problem. A Certified Addictions Counselor trained in identification and treatment of Internet addiction can effectively perform an assessment to determine what level of care is most appropriate. For
          a free confidential assessment, call the Illinois Institute for Addiction Recovery at (800) 522-3784. An assessment can be completed 24 hours a day, 7 days a week. Appointments are preferred, but walk-ins are always welcome. </h5>
        <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
          occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
  <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-xlarge w3-padding-32"><i class="fa fa-facebook-official w3-hover-opacity"></i><i class="fa fa-instagram w3-hover-opacity"></i><i class="fa fa-snapchat w3-hover-opacity"></i><i class="fa fa-pinterest-p w3-hover-opacity"></i><i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Created by the Indesicive Iguanas</p>
  </footer>
  <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
</body>

</html>