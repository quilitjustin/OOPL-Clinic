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
 public function sortTime($x, $y){
  $x = new DateTime($x['time']);
  $y = new DateTime($y['time']);
  if($x == $y){
   return 0;
  }
  return $x < $y ? 1 : 1;
 }
}