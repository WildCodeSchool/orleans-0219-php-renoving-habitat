<?php
// hello.php

echo "<pre>";
var_dump($_POST);

$to = 'a.rioncervi@gmail.com';
$subject = 'This is subject';
$message = 'This is body of email';
$from = "From: FirstName LastName <SomeEmailAddress@Domain.com>";
var_dump(mail($to, $subject, $message, $from));

echo "</pre>";
