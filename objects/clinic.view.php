<?php
require_once 'clinic.class.php';

class ViewRecord extends Clinic{
 protected function fetchConsultInfo(){
  return $this->consultInfo();
 }
 protected function fetchPatientInfo(){
  return $this->patientInfo();
 }
}