<?php
   function checkEmpty($values){
       $flag = false;
       if(!isset($values) || trim($values) == null){
           $flag = true;
       }
       return $flag;
   }