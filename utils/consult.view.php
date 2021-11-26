<?php
require_once dirname(__DIR__).'/objects/clinic.view.php';
require_once 'sort.util.php';
class ViewConsult extends ViewRecord{
 public function getConsultInfo(){
    return $this->fetchConsultInfo();
 }
}

$view = new ViewConsult;
$records = $view->getConsultInfo();

if(isset($_GET['sort'])){
 $sort = new Sort;
 $sortBy = strtolower($_GET['sort']);
 switch ($sortBy){
  case "ref":
   uasort($records, [$sort, 'sortString']);
   break;
  case "name":
   uasort($records, [$sort, 'sortString']);
   break;
  case "consultation":
   uasort($records, [$sort, 'sortString']);
   break;
  case "time":
   uasort($records, [$sort, 'sortTime']);
   $records = array_reverse($records);
   break;
  case "status":
   uasort($records, [$sort, 'sortString']);
   break;
  default:
   echo "Opps~";
 }
}

       