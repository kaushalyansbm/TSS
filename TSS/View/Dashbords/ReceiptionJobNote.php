<div class="col-md-9 lgg">
 <form action="http://localhost/TSS/Controller/AddJobNote.php" method="post"> 
  <?php
  if(isset($_GET['add'])){?>
  <div class="row alert alert-success">
    <div class="col-md-12" style="height: 10px;"><?php
     echo"Job note entered success fully";
    
    ?></div>
  </div>
<?php
}?>
	<div class="row">
    <div class="col-md-12" style="background-color: #9484e0;height: 46px;">
     <p style="position: absolute;top: 10px;"> Customer Information</p>
    </div>
  </div>  
	 <div class="row">
    <div class="col-md-12">
      <div class="form-group">
            <label for="exampleFormControlInput1">Customer Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"  name="cname" pattern="[A-Za-z].{0,20}" title="name is too long use part of name" placeholder="Customer Name"  <?php
          if (isset($_GET['adds'])) {?> value="<?php echo$_SESSION['cname']?>"<?php }?>
required>
            
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="exampleFormControlInput1">Customer Address</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"  name="caddress" placeholder="Customer Address" <?php
          if (isset($_GET['adds'])) {?> value="<?php echo$_SESSION['caddress']?>"<?php }?>   maxlength="70" required>
        </div>
    </div>
  </div>
  <div class="row">
      <div class="col-md-6">
         <div class="form-group">
            <label for="exampleFormControlInput1">Customer Telephone</label>
            <input type="number" class="form-control"  id="exampleFormControlInput1" name="ctelephone" minlength="0" maxlength="11"placeholder="Customer Telephone"<?php
          if (isset($_GET['adds'])) {?> value="<?php echo$_SESSION['ctelephone']?>"<?php }?> required>
        </div>
        <?php
          if (isset($_GET['adds'])) {
                 ?>
                 <h5 style="color: red;">enter valid telephone with 10 digits</h5>
         <?php }

        ?>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlInput1">Customer Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="cemail" placeholder="Customer Email" <?php
          if (isset($_GET['adds'])) {?> value="<?php echo$_SESSION['cemail']?>"<?php }?>required>
        </div>
      </div>
  </div>
    <div class="row">
    <div class="col-md-12" style="background-color: #9484e0;height: 46px;">
     <p style="position: absolute;top: 10px;">Product Information</p>
    </div>
  </div>  
   <div class="row">
    <div class="col-md-6">
      <div class="form-group">
            <label for="exampleFormControlInput1">Product Brand</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php if(isset($_SESSION['br'])){echo$_SESSION['br'];}?>"name="pbrand" placeholder="Product Brand"<?php
          if (isset($_GET['adds'])) {?> value="<?php echo$_SESSION['brand']?>"<?php }?> required>
      </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Type</label>
          <select class="form-control" name="type" id="exampleFormControlSelect1">
            <option>desktop</option>
            <option>notebook</option>
            <option>server</option>
            <option>laptop</option>
            <option>printer</option>
            <option>monitor</option>
            <option>other</option>
            
          </select>
        </div>
    </div>  
    </div> 


  <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="exampleFormControlInput1">Problem  Reported</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="problem" <?php
          if (isset($_GET['adds'])) {?> value="<?php echo$_SESSION['problem']?>"<?php }?>placeholder="Reported Problem" required>
        </div>
    </div>
  </div>
  <div class="row">  
    <div class="col-md-6">
         <div class="form-group">
            <label for="exampleFormControlInput1">Serial Number</label>
            <input type="text" class="form-control" maxlength="51" minlength="5" value="<?php if(isset($_SESSION['sn'])){echo$_SESSION['sn'];}?>" id="exampleFormControlInput1" name="snumber" placeholder="Serial Number" <?php
          if (isset($_GET['adds'])) {?> value="<?php echo$_SESSION['sn']?>"<?php }?> required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlInput1">Model</label>
            <input type="text" class="form-control" value="<?php if(isset($_SESSION['ml'])){echo$_SESSION['ml'];}?>" id="exampleFormControlInput1" name="model" placeholder="Model" <?php
          if (isset($_GET['adds'])) {?> value="<?php echo$_SESSION['ml']?>"<?php }?> required>
        </div>
    </div>
   </div>
  <div class="row">
    <div class="col-md-12" style="background-color: #9484e0;height: 46px;">
     <p style="position: absolute;top: 10px;">Warranty Information</p>
    </div>
  </div>  
   <div class="row">
    <div class="col-md-6">
       
        <div class="form-group">
          <label for="exampleFormControlSelect1"></label>
          <select class="form-control" name="warrenty" id="exampleFormControlSelect1">
            <option>warrenty</option>
            <option>chargeable</option>
          </select>
        </div>
    </div>   
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>Technicians for Assign</h2>
      <table class="table">
            <thead>
                <tr>
                    <th>Assign</th> 
                    <th>First name</th>
                    <th></th>
                    <th>Number of tasks</th>
                </tr>
            </thead>
            <tbody>
                
      <?php

     
                       $conn=mysqli_connect("localhost","root","kaushalya","TSS");
                       $data=array();
                       $sql="SELECT * FROM technician WHERE skill=(select MIN(skill)from technician) LIMIT 2;";
                       $result=mysqli_query($conn,$sql);
                       while($row=mysqli_fetch_assoc($result))
                  {
                                  
                                  $data[]=$row;
                  }
                                  
                  foreach ($data as $d) {
                  ?>
               
                         <?php echo "<tr><td><div class='form-check'>                     
                        <label class='form-check-label' for='exampleRadios1'><input class='form-check-input' type='radio' name='assigni' id='exampleRadios1' value=". $d['tid']."  checked>     </label></div>
                  </td><td>".$d['fname']."</td><td>".$d['lname']."</td><td> ".$d['skill']."</td></tr>";?>
                    <input type="hidden" name="skill" value="<?php echo $d['skill'];?>">
                  <?php
                  }
                                                              

      ?>

                   </tbody>
        </table>

    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
   <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" style="float: right;"class="btn btn-primary">Add job Note</button>
            </div>
          </div>
    </div>
   </div>       
</div>
</div>
</form>