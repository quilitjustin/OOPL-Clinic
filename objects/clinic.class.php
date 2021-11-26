<?php
require_once "clinic.db.handler.php";
class Clinic extends DataBase{

 protected function addPatient($arr, $key){
  $this->commitPatientChange($arr, $key);
 }
 protected function patientDelete($key){
  $this->commitPatientDelete($key);  
 }
 protected function consultStatus($key){
  $this->commitConsultStatus($key);
 }
 protected function consultInfo(){
  return $this->queryConsultData();
 }
 protected function patientInfo(){
  return $this->queryPatientData();
 }
}

   