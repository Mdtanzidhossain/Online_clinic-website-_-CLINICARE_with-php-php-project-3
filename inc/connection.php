<?php

   $db = mysqli_connect('localhost', 'root', '', 'clinicare');

   if($db){
   //	echo "Database connection established!";
   }
   else{
     echo "Database connecction error!";
   }

?>