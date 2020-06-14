<div class="col-md-9 lgg">
  <?php
  if (isset($_GET['addd'])) {
  	echo'<H4 style="color:green;">Device added to sales successfully</H4>';
  }
  	?>	
	<div class="row">
		<div class="col-md-12 " style="height: 210px;">
		<form method="post" action="http://localhost/TSS/Controller/AddNewSell.php">
	  <div class="form-group">
    <label for="exampleFormControlInput1">serial number</label>
    <input type="text" class="form-control"minlength="5" maxlength="51" id="exampleFormControlInput1" name="snumber" placeholder="enter device serial number" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Brand</label>
    <select class="form-control" name="brand" id="exampleFormControlSelect1">
      <option>hp</option>
      <option>dell</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Type</label>
    <select class="form-control" name="typee" id="exampleFormControlSelect1">
      <option>desktop</option>
            <option>notebook</option>
            <option>server</option>
            <option>laptop</option>
            <option>printer</option>
            <option>monitor</option>
            <option>other</option>
      
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Model</label>
    <input type="text" class="form-control" minlength="3" maxlength="20"id="exampleFormControlInput1" name="model" placeholder="ender device model" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Warrenty time in years</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" pattern="[0-9]"  name="year" placeholder="ender number of years" required>
  </div>
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;</button>




	</form> 
    </div>
  </div>
  <div class="row">
  		<?php if (isset($_GET['warrentycan'])) {
  			?>
  	<div class="col-md-12 alert alert-info" style="height: 110px;">
          <center><p style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: green;">Customer can use his warrenty until<?php echo$_SESSION['warantydate'];?></p></center> 
          
  	</div>
  		<?php
  	}elseif(isset($_GET['warrentycannot'])){
?> 	<div class="col-md-12 alert alert-danger"style="height: 100px;"> 
<center><p style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: red;">Customer cannot use his warrenty</p></center> 
          
      </div>
          <?php
  	}elseif (isset($_GET['warrentycannotb'])){?>
<div class="col-md-12 alert alert-danger"style="height: 100px;"> 
<center><p style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: red;">There is not such device</p></center> 
          
      </div>

      <?php
    }
  	?>
  </div>
	
</div>