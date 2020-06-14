<?php

   require'../Model/Dao.php';
   

 if (strlen($_POST['ctelephone'])==10) {
   
   $device=new Device();
   $customer=new Customer();
   $jobnote=new JobNote();
   $data=new Dao();
   $tec=new Technician();
  

   $number0=$_POST['assigni'];
   $customername=$_POST['cname'];

   $counts=$_POST['skill'];
   $counts=$counts+1; 

   $number=$data->selectuid();
   $number=$number+1;
   $username=$customername."".$number;
   $userpassword=$customername."".$number."#";
     

   $hashpassword=password_hash($userpassword, PASSWORD_DEFAULT);  

   $tec->setUid($number0);

   $customer->setUsername($username);
   $customer->setAddress($_POST['caddress']);
   $customer->setTel($_POST['ctelephone']);
   $customer->setEmail($_POST['cemail']);
   $customer->setPassword($hashpassword);
   $customer->setId($number);

   $cusN=$customer->getId();

   $device->setBrand($_POST['pbrand']);
   $jobnote->setProblem($_POST['problem']);
   $jobnote->setWarenty($_POST['warrenty']);
   $device->setTypee($_POST['type']);
   $device->setSerialnu($_POST['snumber']);
   $device->setModel($_POST['model']);

   $x=$_SESSION['receiptionistid'];
   $_SESSION['addpassword']=$customer->getPassword();
   $_SESSION['addusername']=$customer->getUsername();

 $data->insertJCustomer($jobnote,$customer,$device,$x);
   
   $data->insertJWDevice($jobnote,$customer,$device,$cusN); 
   $data->insertJobNote($jobnote,$customer,$device,$x,$number0);
   $data-> UpdateCurrentCount($tec,$counts);

date_default_timezone_set('Etc/UTC');

require './PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "tsstec122@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "newtss122";

//Set who the message is to be sent from
$mail->setFrom('tsstec122@gmail.com', "TSS TECHNOLOGIES");

//Set an alternative reply-to address
$mail->addReplyTo('tsstec122@gmail.com', "TSS TECHNOLOGIES");

//Set who the message is to be sent to
$mail->addAddress($customer->getEmail(), "tss");

//Set the subject line
$mail->Subject = "PASSWORD AND USERNAME";

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<html><head></head><body><H4>'.$customername.' your password and user name for logged system</h4><h5>username is:'. $customer->getUsername().'</h5><h5>password is:'.$customername."".$number."#".'</h5></body></html>');

//Replace the plain text body with one created manually
$mail->AltBody = $subject;

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
header("Location: ../index.php");
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}

   


   header("Location: ../View/Dashbords/Dashbords.php?JobNote=ok&add=succes");
       
  } else{

   $_SESSION['cname']=$_POST['cname'];
   $_SESSION['caddress']=$_POST['caddress'];
   $_SESSION['ctelephone']=$_POST['ctelephone'];
   $_SESSION['cemail']=$_POST['cemail'];
   $_SESSION['pbrand']=$_POST['pbrand'];
   $_SESSION['problem']=$_POST['problem'];
   $_SESSION['warrenty']=$_POST['warrenty'];
   $_SESSION['type']=$_POST['type'];
   $_SESSION['sn']=$_POST['snumber'];
   $_SESSION['ml']=$_POST['model'];


   header("Location: ../View/Dashbords/Dashbords.php?JobNote=ok&adds=succes");
     

  }     



