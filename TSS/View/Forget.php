<!DOCTYPE html>
<html>
<head>
	
	<title>TSS technologies</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript">
    	var indexPage=()=>{
    	 alert("welcome to Touch solution system ");
    	}
    </script>


    <style type="text/css">
    	.bg {
			  background-image: url("Resources/land1.jpg");
  
        	  height: 80vh; 
        

        	  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;

            }
		.modal-body {

			background-color: #000000;

		}
		.t{

			background-color: WHITE;
		}
        .modal-header{

        	background-color: #000000;
        }
         .modal-footer{

        	background-color: #000000;
        }



        .lg{
      background-image: url("Resources/login.jpg");
  
        	  height: 100vh; 
        

        	  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;


   }
        .ct{
      background-image: url("Resources/contacttt.jpg");
  
        	  height: 100vh; 
        

        	  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;


   }        

    </style>
     <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous">
	
			  </script> 
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Slabo+27px&display=swap" rel="stylesheet"> 		  
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">		  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">  
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 		  
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Teko&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" integrity="sha256-arMsf+3JJK2LoTGqxfnuJPFTU4hAK57MtIPdFpiHXOU=" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">
</head>
<body>
   <div class="container-fluid lg">
	 
	

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
		 <div class="modal-dialog " style="opacity: 0.8;position: absolute;top:140px;">
                   <div class="modal-content">
                        <div class="modal-header">
                                <h3 class="modal-title">forget password</h3>
                         </div>
                         <div class="modal-body">
                               <form role="form" method="post"  action="../Controller/ForgetController.php">
                                    <div class="form-group">                                 
                                       <input type="email" class="form-control" name="email" placeholder="email" required>
                                    </div>
				                    
				         </div>
				                       
		                 <div class="modal-footer">
		                 
		                             <button class="btn btn-primary btn-block"  type="submit"name="submit">Submit</button>
		                             <?php
				         if(isset($_GET['fail'])){
                          echo"<center><h5 style='color:white;'>wrong email</h5></center>";

				         }?>  
		                  </div>
                                 </form>
                   </div>


            
         </div>
      
		</div>
		<div class="col-md-3"></div>	
	</div>
</body>
</html>
