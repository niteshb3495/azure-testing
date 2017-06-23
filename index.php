<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = 'niteshapp2-mysqldbserver.mysql.database.azure.com:3306';
         $dbuser = 'mysqldbuser@niteshapp2-mysqldbserver';
         $dbpass = 'HappyLife@123';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);
      ?>
   </body>
</html>
