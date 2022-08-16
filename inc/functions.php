<?php

    include "connection.php";

    function delete($table,$key,$d_id,$url){

        global $db;
    	//table name
    	//primary id
    	//delete id
    	//redirect url

    	$query3 = "DELETE FROM $table WHERE $key = '$d_id' ";
        $result3 = mysqli_query($db,$query3);
        if($result3){
          header('Location: '.$url);
         }else{
            echo "category delete error!";
        }
    }

   // function select($select,$table1,$key1,$d_id,$url1){
    	//global $db;

    	//select file
    	//table name
    	//primary id
    	//delete id
    	//redirect url

    	//$select = 'u_photo';
             //   $table1 = 'user';
        //        $key1 = 'u_id';
               // $d_id = $delete_id;
               // $k = $photoName;
               // $url1 = 'unlink('assets/images/user/'.$k)';

               //delete($select,$table1,$key1,$d_id,$url1);
   // }//

?>

