<?php

if(isset($_POST["submit1"])){
  $firstName = $_POST["first-name"];
  $lastName = $_POST["last-name"];
  $gender = $_POST["gender"];
  $dob = $_POST["date-of-birth"];
  $userName = $_POST["uid"];
  $email = $_POST["email"];
  $password = $_POST["psw"];
  $passRepeat = $_POST["psw-repeat"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputSignup($firstName, $lastName, $gender, $dob, $userName, $email, $password, $passRepeat) !== false){
    header("location: /medkit.php?error=emptyinput");
    exit();
  }
  if(invalidUid($userName) !== false){
    header("location: /medkit.php?error=invaliduid");
    exit();
  }
  if(invalidEmail($email) !== false){
    header("location: /medkit.php?error=invalidemail");
    exit();
  }
  if(pwdMatch($password, $passRepeat) !== false){
    header("location: /medkit.php?error=passwordsdontmatch");
    exit();
  }
  if(uidExists($conn, $userName, $email) !== false){
    header("location: /medkit.php?error=usernametaken");
    exit();
  }
  createUser($conn, $firstName, $lastName, $gender, $dob, $userName, $email, $password);
}
else{
  header("location: /medkit.php");
  exit();
}
