<div class="col-md-9 lgg">
   <?php

  if(isset($_GET['add'])){
    echo "<div class='row alert alert-success'>  <p style='color:green;'>Technician successfuly added</p> </div>";
  }

   ?> 
  
	<div class="row">
		<form method="post" action="http://localhost/TSS/Controller/AddTechnicianController.php">
	  <div class="col-md-12">
    <div ></div>
    <div class="form-group">
        <label for="exampleFormControlInput1">NIC</label>
        <input type="text" maxlength="10" minlength="10"class="form-control" id="exampleFormControlInput1" name="nic" required>
    </div>
    <?php
       if (isset($_GET['addn'])) {
    ?>

       <center><h5 style="color: red;">National identity card has 10 characters</h5></center>

    <?php

       }
    ?>
     <div class="form-group">
        <label for="exampleFormControlInput1">First Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[A-Za-z].{0,20}" title="name is too long use part of name" maxlength="20" name="fname" required>
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Last Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[A-Za-z].{0,20}" title="name is too long use part of name" name="lname" maxlength="20" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Address</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" maxlength="70"name="address" required>
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Telephone</label>
        <input type="text"  maxlength="10"  class="form-control" id="exampleFormControlInput1"  name="telephone" required>
    </div>
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Add Technician&nbsp;&nbsp;&nbsp;</button>




	</form> 
    </div>
 </div>
    <?php
       if (isset($_GET['addn'])) {
    ?>

       <center><h5 style="color: red;">Action not success</h5></center>

    <?php

       }
    ?>
        <?php
       if (isset($_GET['add'])) {
    ?>

    <?php

       }
    ?>


</div>