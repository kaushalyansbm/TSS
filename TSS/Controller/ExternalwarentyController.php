<?php

     require'../Model/Dao.php';

     $data=new Dao();
     $device=new Device();

     $device->setSerialnu($_POST['snumber']);
     $device->setBrand($_POST['brand']);
      
      if ($data->receiptionistWarrantyAvailability($device)!="") {

		 $lexdate=strtotime($data->receiptionistWarrantyAvailability($device));
		 $todat=strtotime(date('Y/m/d'));

				    if($lexdate>$todat){
				    	$_SESSION['warantystatus']="ok";
				    	$_SESSION['warantydate']=$data->receiptionistWarrantyAvailability($device);
				    	header("Location: ../index.php?Waranty=ok&it=ok");
				    }else{
				       $_SESSION['warantystatusbad']="notok";
		               header("Location: ../index.php?Waranty=ok&its=ok");				         }
      }elseif ($data->receiptionistWarrantyAvailability($device)==0) {
      	header("Location: ../index.php?Waranty=ok&itss=ok");
      }
    



?>