<?php
require_once dirname(__DIR__).'/objects/clinic.control.php';
require_once 'traits.util.php';

class DeletePatient extends RecordControl{
 use Validation;
 public function setDataPatient(){
  $key = $this->properFormat($_POST['uid']);
  $this->setPatientDelete($key);
 }
}

$delPatient = new DeletePatient;
$delPatient->setDataPatient();