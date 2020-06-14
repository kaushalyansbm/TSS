<div class="col-md-9 lgg">
	<div class="row" style="height: 40px;"></div>
	<div class="row">
		<div class="col-md-12" style="height: 210px;">
		<form method="post" action="http://localhost/TSS/Controller/ReceiptionWarrantyController.php">
	   <div class="row ">
     <div class="col-md-2"></div> 

    <div class="form-group col-md-8  ">
    <label for="exampleFormControlInput1">serial number</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="snumber" placeholder="ender device serial number" minlength="5" maxlength="51" required>
  </div>
  <div class="col-md-2"></div>
  </div> 
  <div class="row">
  <div class="col-md-2"></div> 
  <div class="form-group col-md-8">
    <label for="exampleFormControlSelect1">Brand</label>
    <select class="form-control" name="brand" id="exampleFormControlSelect1">
      <option>hp</option>
      <option>dell</option>
      
    </select>
  </div>
</div>
<div class="row">
  <div class="col-md-8"></div>
  <div class="col-md-4">
    
  <button type="submit" style="float: left;"class="w3-button w3-blue">&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;</button>
  </div> 
</div>




	</form> 
    </div>
  </div>
  <div class="row">
  		<?php if (isset($_GET['warrentycan'])) {
  			?>
        <div class="col-md-2"></div>
  	<div class="col-md-8 alert alert-info" style="height: 50px;">
          <center><p style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: green;">Customer can use his warrenty until<?php echo$_SESSION['warantydate'];?></p></center> 
          
  	</div>
  		<?php
  	}elseif(isset($_GET['warrentycannot'])){
?> 
   <div class="col-md-2"></div>

	<div class="col-md-8 alert alert-danger"style="height: 50px;"> 
<center><p style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: red;">Customer cannot use his warrenty</p></center> 
          
      </div>
          <?php
  	}elseif (isset($_GET['warrentycannotb'])){?>
      <div class="col-md-2"></div>
<div class="col-md-8 alert alert-danger"style="height: 50px;"> 
<center><p style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: red;">There is not such device</p></center> 
          
      </div>

      <?php
    }
  	?>
  </div>
	
</div>