<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)){
    header("Location: contatti.php?errore=email_non_valida");
    exit();  
}



header("Location: grazie.php");
exit();
}else{
  header("Location: contatti.php");
  exit();
}

?>