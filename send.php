<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $to = "rapic.021@gmail.com"; // Adresa na koju ti stiže poruka
    $subject = "New Contact Form Message";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $body = "Ime: $name\nEmail: $email\n\nPoruka:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        // Uspeh – preusmeri nazad
        header("Location: contact.html?success=1");
        exit();
    } else {
        // Neuspeh – preusmeri uz error
        header("Location: contact.html?success=0");
        exit();
    }
  }  
?>