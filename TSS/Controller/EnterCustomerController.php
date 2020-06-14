<?php
  
   require'../Model/Dao.php';
   
   if (strlen($_POST['nic'])==10) {
        
           
   $dat=new Dao();
   $cus=new Customer();

   
   $cus->setFname($_POST['fname']);
   $cus->setLname($_POST['lname']);
   $cus->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
   $cus->setNic($_POST['nic']);
   $cus->setId($_SESSION['customerid']);
   
   if($_POST['password']==$_POST['rpassword'])
   {
      $dat->insertCustomerDetais($cus);
      header("Location: ../View/Dashbords/Dashbords.php?changeprofile=ok&update=succes");
   }
   else{
    header("Location: ../View/Dashbords/Dashbords.php?changeprofile=ok&updaten=nsucces");

   }
        



   }else{

    header("Location: ../View/Dashbords/Dashbords.php?changeprofile=ok&updatennic=nsucces");

   }

