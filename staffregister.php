<!DOCTYPE html>
<?php
require "config.php";
error_reporting(E_PARSE);

echo "New record ";
if (isset($_POST['submit']))
{
   $schoolname = $_POST['schoolname'];
$schoolid = $_POST['schoolid'];

   $user = $_POST['suser'];
     
   $pwd = $_POST['spwd'];
    $sName = $_POST['sName'];
        $phone = $_POST['phone'];
 
    try {
   if($user != "" && $pwd != "" )
   {
         
      
$sql = "insert into  slogin (schoolname,schoolid,sname,suser,spwd,phone) values('$schoolname','$schoolid','$sName','$user','$pwd','$phone')";
 echo $sql;
        $conn->exec($sql);
        
    echo "New record created successfully";
        header("Location:index.php");
       
} else {
       
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
       
  }
catch(PDOException $e)
    {
  
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>


<html lang="en">
  <head>
    <title>Student Malpractice System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">48 Officers line, Thorappadi,Vellore 632602</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <a href="mailto:chowwmagesh@gmail.com"><span class="text">Studentmalpractice@gmail.com</span></a> 
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						     <a href="tel://8220942007"><span class="text">+ 91 8220942007</span> </a>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.html">Student Malpractice System</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	         <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="adminlogin.php" class="nav-link">Admin Login</a></li>
<li class="nav-item"><a href="schools.php" class="nav-link">Schools</a></li>
	        	 
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
   
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/p3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5 bg-primary">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	            <h2 class="mb-4">Staff Login</h2>
	   
	          </div>
	          <form action="#" class="appointment-form ftco-animate" method="post">

<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" id="schoolname" name ="schoolname" placeholder="Schoolname">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="varchar" class="form-control" id ="schoolid" name ="schoolid" placeholder="schoolid">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" id="suser" name ="suser" placeholder="User Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="password" class="form-control" id ="spwd" name ="spwd" placeholder="Password">
		    				</div>
	    				</div>
	    		         <div class="d-md-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" id="sName" name ="sName" placeholder="Name">
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" id="phone" name ="phone"  class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					 
		            <div class="form-group ml-md-4">
		              <input type="submit" id="submit" name ="submit" value="submit" class="btn btn-secondary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
                    
                  
    			</div>
        </div>
    	</div>
    </section>

 <section class="ftco-intro" style="background-image: url(images/p4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>Teaching Your Child Some Good Manners</h2>
						<p class="mb-0">Examinations should have a code of conduct which we call examination etiquette.Examination etiquette is the code of conduct during the exam. This is what the students are expected to do before and during the examination..</p>
					</div>
				<!--	<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a></p> 
					</div>-->
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Certified</span> Faculties</h2>
            <p>The best certifeid teachers for all class students.</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Mrs.Charitha</h3>
								<span class="position mb-2">VICE PRINCIPAL,SUNBEAM</span>
								<div class="faded">
									<p>Awarded thrice as the best female teacher in vellore. Specialised in Computer science</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Ms.RamaPrabha</h3>
								<span class="position mb-2">BIOLOGY(HOD),LAKSHMI GARDEN</span>
								<div class="faded">
									<p>Teacher for class(9 to 12)</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Mr.Ram</h3>
								<span class="position mb-2">MATHS(H0D) VIDHYA LAKSHMI</span>
								<div class="faded">
									<p>Has given 100% results for the past 7 years.Maths Professor (class 11 and 12)</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dharani rajan</h3>
								<span class="position mb-2">CHEMISTRY(HOD),SUNBEAM</span>
								<div class="faded">
									<p>The Students's favourite.Teacher for class 9 to 12</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

 
		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>10 Years of</span> Experience</h2>
            <p>Top Most institutions in Tamil Nadu.</p>
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="3000">0</strong>
		                <span>Successful Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="800">0</strong>
		                <span>Happy Parents</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="160">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>
  
		
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>