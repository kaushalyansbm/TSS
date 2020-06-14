<div class="col-md-9 lgg">
  <?php if(isset($_GET['add'])){
    echo "<div class='row alert alert-success'>  <p style='color:green;'>Receiptionist was successfully added</div>";
  }

   ?> 
  <div class="row">
    <form method="post" action="http://localhost/TSS/Controller/AddReeiptionController.php">
    <div class="col-md-12">
    <div ></div>
    <div class="form-group">
        <label for="exampleFormControlInput1">NIC</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" maxlength="10" minlength="10" name="nic" required >
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">First Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[A-Za-z].{0,20}" maxlength="20" title="enter valid first name" name="fname"  required >
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Last Name</label>
        <input type="text" class="form-control" pattern="[A-Za-z].{0,20}" maxlength="20" title="enter valid last name"id="exampleFormControlInput1" name="lname"  required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  required>
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Address</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" maxlength="70" name="address"  required>
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Telephone</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="telephone" maxlength="10"  required>
    </div>
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Add Receiption&nbsp;&nbsp;&nbsp;</button>




  </form> 
    </div>
 </div>

</div>