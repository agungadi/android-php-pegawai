<?php
 //Mendefinisikan Konstanta
 define('HOST','ec2-174-129-226-232.compute-1.amazonaws.com');
 define('USER','yqkincusuhqrzt');
 define('PASS','938dd304476a16ccb219d0432f20c45a22ff4944b77783fd3429aef06f46dfe5');
 define('PORT','5432');
 define('DB','db_android');

 $con = mysqli_connect(HOST,USER,PASS,PORT,DB) or die('Unable to Connect');
?>
