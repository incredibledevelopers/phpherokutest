<?php
   $host        = "host = ec2-50-19-95-77.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d289v9rsd9ji5e";
   $credentials = "user = uuptlthknwssba password=6060ddb6df79f83d0e51e707aa1db046bff370752bc1e3ed1b06d37c1d69cc18";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
      $sql =<<<EOF
      SELECT * from user;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)) {
      echo "ID = ". $row[0] . "\n";
      echo "First name = ". $row[1] ."\n";
      echo "Last Name = ". $row[2] ."\n";
      echo "Email =  ".$row[3] ."\n\n";
   }
   echo "Operation done successfully\n";
   pg_close($db);
?>