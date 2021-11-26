<?php
require_once dirname(__DIR__).'/objects/clinic.control.php';
require_once 'traits.util.php';

class StatusConsult extends RecordControl{
 use Validation;
 public function setDataConsult(){
  $key = $this->properFormat($_POST['ref']); 
  $this->setConsultStatus($key);
 }
}

$stCon = new StatusConsult;
$stCon->setDataConsult();