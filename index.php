<?php 

require './includes/db.php';

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>


<div class="form-group">
    <form action="./includes/db.php" method="POST">
            <label class="required" for="newsletter-name">
              Your Name
            </label>
            <input id="newsletter-name" class="form-control" name="name" type="text">
          </div> <!-- end of form group -->
        </div> <!-- sign-up-input-->

        <div class="form-group">
          <label class="required email" for="newsletter-email">
            Your Email
          </label>
          <input id="newsletter-email" class="form-control" name="email" type="text">
          <button type="submit" name="submit">Sign-up</button>
        </div> <!-- end of form group -->
</form>


  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
