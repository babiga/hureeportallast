<?php
session_start();

if(isset($_SESSION['bagsh-loggedin'])){
      unset($_SESSION["loggedin"]);
       unset($_SESSION['bagsh']);
       unset($_SESSION['bagsh-ner']);
       unset($_SESSION['bagsh-ovog']);
       unset($_SESSION["bagsh-loggedin"]);
    header("Location:../teacher-login.php");
 } else if(isset($_SESSION['student-loggedin'])){
    unset($_SESSION["loggedin"]);
    unset($_SESSION["student"]);
    unset($_SESSION["student-loggedin"]);
    header("Location:../index.php");
 }
?>