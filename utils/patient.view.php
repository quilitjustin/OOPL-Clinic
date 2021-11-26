<?php
require_once dirname(__DIR__).'/objects/clinic.view.php';
require_once 'sort.util.php';

class ViewPatient extends ViewRecord{
 public function getPatientInfo(){
    return $this->fetchPatientInfo();
 }
}

$view = new ViewPatient;
$records = $view->getPatientInfo();

if(isset($_GET['sort'])){
 $sortBy = strtolower($_GET['sort']);
 $sort = new Sort;
 switch ($sortBy){
  case "name":
   uasort($records, [$sort, 'sortString']);
   break;
  case "address":
   uasort($records, [$sort, 'sortString']);
   break;
  case "age":
   uasort($records, [$sort, 'sortInt']);
   break;
  case "gender":
   uasort($records, [$sort, 'sortString']);
   break;
  default:
   echo "Opps~";
 }
}
   