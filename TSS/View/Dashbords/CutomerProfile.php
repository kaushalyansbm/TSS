<div class="col-md-9 lgg">
	<form method="post" action="http://localhost/TSS/Controller/EnterCustomerController.php">
  <div class="row">
    <div class="col-md-12" style="background-color: #9484e0;height: 46px;">
     <p style="position: absolute;top: 10px;"> My Information</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">NIC</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" maxlength="10"  name="nic" required>
       </div>
    </div>
    <?php
      if (isset($_GET['updatennic'])) {
?>
          <h6 style="color: red;"><center>National identy card number has 10 characters</center></h6>

<?php
      }


        ?> 
  </div>
  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">First name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="fname" maxlength="20" pattern="[A-Za-z].{0,}" title="enter valid first name"required>
       </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">Last Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="lname"  maxlength="20" pattern="[A-Za-z].{0,}" title="enter valid last name"required >
       </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">Change password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" name="password" required>
       </div>
    </div> 
  </div>

  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">Confirm password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" name="rpassword"required>
       </div>
    </div> 
  </div>

  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;</button>
</form>
<div class="row">
  
    <?php
      if (isset($_GET['update'])) {
       ?><div class="col-md-12 alert alert-info"> 
        <?php
          echo" success fuly informations added";
      }elseif(isset($_GET['updaten'])){
        ?>
          <div class="col-md-12 alert alert-danger"> 
       <?php
        echo"<center><h4 style='color:red;'> action not sucess</h4></center>";
      }
    ?>

    <?php
      if (isset($_GET['updatennic'])) {
?>
          <h6 style="color: red;"><center>action not sucess</center></h6>

<?php
      }


        ?> 
    
  </div>
  <div class="row"> 
   <div class="col-md-12" style="height: 20px;"></div>
  </div>
<div class="row"> 
   <div class="col-md-12">
     You can downlord Job note here
  <form method="post" action="http://localhost/TSS/Controller/pdfMakerController.php">   
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Downlord&nbsp;&nbsp;&nbsp;</button>
</form>
   </div>
</div> 

  <div class="row"> 
   <div class="col-md-12">
     You can downlord completed dilevery note here
  <form method="post" action="http://localhost/TSS/Controller/DeliveryReportController.php">   
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Downlord&nbsp;&nbsp;&nbsp;</button><input type="hidden" name="cid" value="<?php echo $_SESSION['customerid'];?>">
</form>
   </div>
</div> 



<?php
 if(isset($_GET['d'])) {
  ?>
<script type="text/javascript">
  alert("work is not  completed yet");
</script>

<?php
}

?>

</div>