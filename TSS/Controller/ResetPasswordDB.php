<?php
 
   require'../Model/Dao.php';
   $dat=new Dao();
   echo$_POST['password']."  ".$_POST['repassword'];
   echo$_SESSION['email']."  ".$_SESSION['vcode'];

  if ($_POST['password']==$_POST['repassword']) {
     $dat->UpdateMPassword($_SESSION['email'],$_SESSION['vcode'],$_POST['repassword']);
     $dat->UpdateTPassword($_SESSION['email'],$_SESSION['vcode'],password_hash($_POST['repassword'], PASSWORD_DEFAULT));
     $dat->UpdateRPassword($_SESSION['email'],$_SESSION['vcode'],password_hash($_POST['repassword'], PASSWORD_DEFAULT));
     $dat->UpdateCPassword($_SESSION['email'],$_SESSION['vcode'],password_hash($_POST['repassword'], PASSWORD_DEFAULT));

     if($dat->ForgetPasswordR($_SESSION['email'])==1){
         header("Location: ../View/Dashbords/Dashbords.php?warrantycheck=ok");
     }elseif ($dat->ForgetPasswordM($_SESSION['email'])==1) {
     	 header("Location: ../View/Dashbords/Dashbords.php?tecnicianadd=ok");
     }elseif ($dat->ForgetPasswordT($_SESSION['email'])==1) {
     	  header("Location: ../View/Dashbords/Dashbords.php?checkTechJobnote=ok");
     }elseif ($dat->ForgetPasswordC($_SESSION['email'])==1) {
     	header("Location: ../View/Dashbords/Dashbords.php?changeprofile=ok");
     }else{

     }
  }else{

    header("Location: ../View/resetPasswordView.php?match=no");


  }

 
?>