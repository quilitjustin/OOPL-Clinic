<?php
require_once 'clinic.class.php';

class RecordControl extends Clinic{
 protected function setRecordStatus($ref){
  $this->recordStatus($ref);
 }
 protected function setPatient($arr, $key){
  $this->addPatient($arr, $key);
 }
 protected function setPatientDelete($key){
  $this->patientDelete($key);
 }
 protected function setConsultStatus($key){
  $this->consultStatus($key);
 }
}
