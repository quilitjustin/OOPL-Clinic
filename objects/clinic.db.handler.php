<?php

class Database{
 private function patientDB($arr){
  $db = fopen(dirname(__DIR__).'/db/patient.db.txt', 'w');
  fwrite($db, serialize($arr));
  fclose($db);
 }
 private function consultDB($arr){
  $db = fopen(dirname(__DIR__).'/db/consult.db.txt', 'w');
  fwrite($db, serialize($arr));
  fclose($db);
 }
 protected function commitPatientChange($data, $key){
  $arr = $this->queryPatientData();
    if(array_key_exists($key, $arr)){
     header("Location: ../index.php?msg=<h3 class='text-danger'>Patient Already Exist!</h3>");
     die();
    }
  $arr[$key] = $data;
  $this->patientDB($arr);
  header("Location: ../index.php?msg=<h3 class='text-success'>Added Successfully</h3>");
  die();
 }
 protected function commitPatientDelete($key){
   $arr = $this->queryPatientData();
    if(!array_key_exists($key, $arr)){
     header("Location: ../patient.ui.php?msg=<h3 class='text-danger'>Patient Doesn't Exist</h3>");
    die();
   }
  unset($arr[$key]);
  $dbName = "patient";
  $this->patientDB($arr);
  header("Location: ../patient.ui.php?msg=<h3 class='text-success'>Deleted Successfully</h3>");
  die();
 }
 protected function commitConsultStatus($key){
    $arr = $this->queryConsultData();
    if(!array_key_exists($key, $arr)){
     header("Location: ../consult.ui.php?msg=<h3 class='text-danger'>Record Doesn't Exist!</h3>");
     die();
    }
    if($arr[$key]["status"] == "Complete"){
     header("Location: ../consult.ui.php?msg=<h3 class='text-danger'>Already Completed Before!</h3>");
     die();
    }
    $arr[$key]["status"] = "Complete";
    $this->consultDB($arr);
    header("Location: ../consult.ui.php?msg=<h3 class='text-success'>Change Successfully</h3>");
    die();
 }
 protected function queryPatientData(){
  $data = file_get_contents(dirname(__DIR__).'/db/patient.db.txt');
  return unserialize($data);
 }
 protected function queryConsultData(){
  $data = file_get_contents(dirname(__DIR__).'/db/consult.db.txt');
  return unserialize($data);
 }
}