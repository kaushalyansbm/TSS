<?php
   require'../Model/Dao.php';
   
   $dev=new Device();
   $dat=new Dao();



   $dev->setSerialnu($_POST['snumber']);
   $dev->setTypee($_POST['typee']);
   $dev->setBrand($_POST['brand']);
   $dev->setModel($_POST['model']);
   $yer=$_POST['year'];
   $da=date('Y-m-d', strtotime('+'.$yer.' years'));
   $dev->setWarenty($da);
   $dat->insertNewSell($dev);


     header("Location: ../View/Dashbords/Dashbords.php?selldevice=ok&addd=succes"); 

