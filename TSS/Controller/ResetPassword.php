<?php
 
     require'../Model/Dao.php';

     $dat=new Dao();


      $_SESSION['vcode']=$_POST['vcode'];

     // echo$_SESSION['vcode']." ".$_SESSION['email'];
      if($dat->selectVmanager($_SESSION['vcode'],$_SESSION['email'])==1||$dat->selectVcustomer($_SESSION['vcode'],$_SESSION['email'])==1||$dat->selectVreceiptionist($_SESSION['vcode'],$_SESSION['email'])==1||$dat->selectVtechnician($_SESSION['vcode'],$_SESSION['email'])==1)
      {
                  header("Location: ../View/resetPasswordView.php");
      }else{
      	        
     header("Location: ../View/verfy.php?fail=o");

      	      }




?>