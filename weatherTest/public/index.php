<?php
error_reporting(E_ALL);
ini_set('ignore_repeated_errors', TRUE);

ini_set('display_errors', FALSE);

ini_set('log_errors', TRUE);

ini_set('error_log', 'C:\Users\Wayne The Goat\PhpstormProjects\weatherTest\var\tmp\my-errors.log');
?>


<html>
 <head>
  <title> Welcome to my Weather Homepage!</title>
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/homepage.css">
 </head>
 <body>
<?php include 'navigation.php';?>

<?php include 'weather.php';?>

 </body>



 <?php include 'footer.php';?>


</html>

