<?php

function emptyInputSignup($firstName, $lastName, $gender, $dob, $userName, $email, $password, $passRepeat) {
  $result;
  if(empty($firstName) || empty($lastName) || empty($gender) || empty($dob) || empty($userName) || empty($email) || empty($password) || empty($passRepeat)){
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function invalidUid($userName) {
  $result;
  if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function pwdMatch($password, $passRepeat) {
  $result;
  if($password !== $passRepeat){
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function uidExists($conn, $userName, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: /medkit.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else{
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $gender, $dob, $userName, $email, $password) {
  $sql = "INSERT INTO users (usersFirstName, usersLastName, usersGender, usersDob, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: /medkit.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $gender, $dob, $userName, $email, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: /medkit.php?error=none");
  exit();
}
