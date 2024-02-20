<?php

session_start();
include 'lib/portfolio.php';

$res=deletepro($_GET['proid']);
if($res==1){
  header("location:Allportfolio.php");
}
else{
  
  header("location:Allportfolio.php");
}



