<?php

function register_user(string $email, string $pass, string $pass2) {

  $query = "INSERT INTO users (email, pwd) VALUES (:login, :pwd)";
  $stmt = $pdo->prepare($query);
  $stmt->execute([
    'login' => $login,
    'pwd' => $password
  ]);

  return true;
}
