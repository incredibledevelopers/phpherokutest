<?php
   $host        = "host = ec2-50-19-95-77.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d289v9rsd9ji5e";
   $credentials = "user = uuptlthknwssba password=6060ddb6df79f83d0e51e707aa1db046bff370752bc1e3ed1b06d37c1d69cc18";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database<br>";
   } else {
      echo "Opened database successfully<br>";
   }
   
  $query = "SELECT * FROM user LIMIT 5"; 

$rs = pg_query($db, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
  echo "$row[0] $row[1] $row[2] $row[3] \n";
}

   pg_close($db);
?>