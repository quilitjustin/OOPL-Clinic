<?php
trait Validation{
 public function validateGender($gender){
  if(!in_array($gender, ['Male', 'Female'])){
   header("Location: ../index.php?msg=<h3 class='text-danger'>Opps something went Wrong!</h3>");
   die();
  }
 }
 public function properFormat($str){
  if(empty($str)){
   header("Location: ../index.php?msg=<h3 class='text-danger'>Opps something went Wrong!</h3>");
   die();
  }
  return ucwords(strtolower($str));
 }
}


       