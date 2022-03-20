<?php include('connct.php'); ?>
<html>
   <head>
      <title>page</title>
      <meta charset="utf-8">
   </head>
   <body>
      Page 1 - Actuellement 
      <?php echo $user_nbr; ?> utilisateur<?php if($user_nbr != 1) { echo "s"; } ?> en ligne<br />
      <a href="p2.php">Go to page2</a>
   </body>
</html>