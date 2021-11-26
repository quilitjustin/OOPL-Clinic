<?php
require_once dirname(__DIR__).'/objects/clinic.control.php';
require_once 'traits.util.php';

class AddPatient extends RecordControl{
 use Validation; 
 public function setDataPatient(){
    $name = $this->properFormat($_POST['name']); 
    $address = $this->properFormat($_POST['address']);
    $age = $this->properFormat($_POST['age']);
    $gender = $this->properFormat($_POST['gender']);
    $this->validateGender($gender);   
    $arr = array(
        "name" => $name,
        "address" => $address,
        "age" => $age,
        "gender" => $gender
    );
    $key = $name;
  $this->setPatient($arr, $key);
 }
}

$addPatient = new AddPatient;
$addPatient->setDataPatient();