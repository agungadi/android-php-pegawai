<?php
 //Mendefinisikan Konstanta
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','db_android');

   $con = "dbname=dei1dugtm16cah host=ec2-174-129-226-232.compute-1.amazonaws.com port=5432 user=yqkincusuhqrzt password=938dd304476a16ccb219d0432f20c45a22ff4944b77783fd3429aef06f46dfe5 sslmode=require";


   if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
   }

?>
