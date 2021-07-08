<?php
include 'dbcon.php';
$sql = " select 'blood_group' from dashboard_form where blood_group='A+'";
$query = mysqli_query($con, $sql);
if($query){
    
    $a1 = mysqli_num_rows($query);
    
}

$sql = " select 'blood_group' from dashboard_form where blood_group='A-'";
$query = mysqli_query($con, $sql);
if($query){
    
    $a2 = mysqli_num_rows($query);
  
}

$sql = " select 'blood_group' from dashboard_form where blood_group='O'";
$query = mysqli_query($con, $sql);
if($query){
    
    $o = mysqli_num_rows($query);
   
}

$sql = " select 'blood_group' from dashboard_form where blood_group='B-'";
$query = mysqli_query($con, $sql);
if($query){
    
    $b1 = mysqli_num_rows($query);
    
}

$sql = " select 'blood_group' from dashboard_form where blood_group='O+'";
$query = mysqli_query($con, $sql);
if($query){
    
    $o1 = mysqli_num_rows($query);
    // $count++;
}
// echo "O+ =",  $o1;
$sql = " select 'blood_group' from dashboard_form where blood_group='O-'";
$query = mysqli_query($con, $sql);
if($query){
    
    $o2 = mysqli_num_rows($query);
    // $count++;
}
// echo "O- =", $o2;
$sql = " select 'blood_group' from dashboard_form where blood_group='AB+'";
$query = mysqli_query($con, $sql);
if($query){
    
    $ab = mysqli_num_rows($query);
    // $count++;
}
// echo "AB+ =",  $ab;
$sql = " select 'blood_group' from dashboard_form where blood_group='AB-'";
$query = mysqli_query($con, $sql);
if($query){
    
    $ab1 = mysqli_num_rows($query);
    // $count++;
}
// echo "AB- =",  $ab1;

?>