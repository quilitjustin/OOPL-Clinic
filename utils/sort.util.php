<?php

class Sort{
 public function sortInt($x, $y){
  $sortBy = strtolower($_GET["sort"]);
  return $x[$sortBy] <=> $y[$sortBy];
 }          
 public function sortString($x, $y){
  $sortBy = strtolower($_GET["sort"]);
  return strnatcmp($x[$sortBy], $y[$sortBy]);
 }
 function sortTime($x, $y){
  if($x["time"] == $y["time"]){
   return sortName($x, $y);
  }
  return strtotime($x["time"]) - strtotime($y["time"]);
 }
}