<?php include('connct.php'); ?>
<html>
   <head>
      <title>page</title>
      <meta charset="utf-8">
   </head>
   <body>
      Page 2 - Actuellement <?php echo $user_nbr; ?> utilisateur<?php if($user_nbr != 1) { echo "s"; } ?> en ligne<br />
      <a href="page1.php">Go to page1</a>
   </body>
</html>