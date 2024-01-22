<?php

include "conf1.php";

$request = 2;

// Insert record
if($request == 2){

   // Read POST data
   extract($_POST);

   // Insert record

   // echo $video_id . "  ". $video_title. "  ". $video_action;
   // return 1;


   $query = "INSERT INTO liked_disliked_videos VALUES(null,'$video_id','$video_title','$video_action')";
   $result = mysqli_query($con,$query);



   if($result){
      echo 1;
   }else{
      echo mysqli_error($con);
   }

   exit;
}
