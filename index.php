<?php

    include "mail.php";

    $from = $_POST['from'];
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    return $from."<br><br>".$to."<br><br>".$subject."<br><br>".$message;
    mail($to, $subject, $message, from);
