<?php require __DIR__ . '/includes/app.php'; ?>
<?php fsu\session_start(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IS Research Survey</title>
    <link rel="stylesheet" href="http://smashstarmedia.com/foundation/current/css/foundation.css">
    <link rel="stylesheet" href="http://smashstarmedia.com/foundation/current/css/app.css">
    <link rel="stylesheet" href="css/override.css">
  </head>

  <body class="content">
    <div class="survey">
        <?php echo fsu\app(); ?>
    </div>

    <script src="http://smashstarmedia.com/foundation/current/js/vendor/jquery.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/vendor/what-input.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/vendor/foundation.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/app.js"></script>
  </body>
</html>
