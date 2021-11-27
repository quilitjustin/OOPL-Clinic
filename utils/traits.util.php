<?php

trait Validation{
 private function validateGender($gender){
  if(!in_array($gender, ['Male', 'Female'])){
   header("Location: ../index.php?msg=<h3 class='text-danger'>Opps something went Wrong!</h3>");
   die();
  }
 }
 private function isEmpty($data){
  if(empty($data)){
   header("Location: ../index.php?msg=<h3 class='text-danger'>Opps something went Wrong!</h3>");
   die();
  }
 }
 private function isInt($integer){
  $this->isEmpty($integer);
  if(!is_numeric($integer)){
   header("Location: ../index.php?msg=<h3 class='text-danger'>Opps something went Wrong!</h3>");
   die();
  }
  return $integer;
 }
 private function properFormat($str){
  $this->isEmpty($str);
  return ucwords(strtolower($str));
 }
}


       