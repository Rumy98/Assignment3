<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$mailheader= "From:".$name."<"$email.">\r\n;
$recipient ="1921906@iub.edu.bd"

mail($recipient, $message,$mailheader)
or die("Error!");

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact me</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Thank you for contacting. Will get back to you asap</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a></p>

    </div>
  </body>
</html>';

?>