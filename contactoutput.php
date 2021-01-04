<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .form{
            margin: 120px;
            padding: 15px;
            background-color: rgb(9, 248, 196);
        }
        h2{
            padding-bottom: 5px;
            color: rgb(133, 2, 89);
        }
        h4{
            align-items: center;
            justify-content: center;
            padding-top: 8px;
            padding-left: 110px;
           }
           a{
               text-decoration: none;
               color: rgb(7, 7, 7);
           }
           a:hover{
               color: rgb(0, 66, 128);
           }
    </style>
</head>
<body>
    <div class="form">
        <h2>Thanks for submitting your reponse! </h2>
        <p style="color: white;"> your response is submitted</p>
        <h4><a  href="contact.html">Go to the back page</a></h4>
 </div>
</body>

</html>
<?php
  $name = $_POST['nm'];
  $lastname = $_POST['lm'];
  $email =$_POST ['mail'];
  $msg = $_POST['msg'];
//   echo "$name";
//   extract($_POST);
//   $file=fopen("database.txt","a");
//   fwrite($file,"first name :");
//   fwrite($file,$nm."\n");
//   fwrite($file,"last name :");
//   fwrite($file,$lm."\n");
//   fwrite($file,"email :");
//   fwrite($file,$mail."\n");
//   fwrite($file,"messge :");
//   fwrite($file,$msg."\n\n");
//   fwrite($file,"Next Entry\n\n");
//   fclose($file);
 $email_from="suraj4028pandey@gmail.com";
 $email_subject="New Form Submission";
 $email_body="User fName:$name\n"."User lname:$lastname\n"."User email:$email\n"."User msg:$msg\n";
 $to = "surajp4028@gmail.com";
 $headers="from:$email_from\r\n"
//  $headers ="reply-to:$email\r\n;

 if(mail($to,$email_subject,$email_body,$headers)){
     echo "email sent";
 }
 else {
     echo "unbale to sent ";
 }
 
  ?>
