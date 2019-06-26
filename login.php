
<?php @ob_start();include'include/config.php';?>
<!DOCTYPE html>
<html lang="en">

<?php include'include/header.php';?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <?php include'include/top_nav.php';?>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
					

					</div>
					<div class="col-lg-6">
					<?php
					
                     if (isset($_POST['loginBtn'])) {
                     
                     	$email=$_POST['loginEmail'];
                     	$password=$_POST['loginPassword'];
                     	
                       $query=mysqli_query($conn,"select * FROM `admin` where `password`='".$password."' && `email`='".$email."'");
         if($query->num_rows > 0){
          while($row = $query->fetch_assoc()){
            $email=$row['email'];
            $school_ID= $row['school_ID'];
             //session_start();
            $_SESSION['login_user'] = $email;
            $_SESSION['login_user_school_ID'] = $school_ID;
          
          // header("location:http://localhost/childCareIMS/pages/admin/dashboard.php");
          }

         }else{
          echo' <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert"
          aria-hidden="true">
          &times;
          </button>
          Your Login Email or Password is invalid.
          </div>';  
         }

                     }
					?>
						<div class="form-wrapper" >
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s" style="border-radius: 20px">
							<?php if(!isset($_GET['action'])) { ?>
							<div class="panel panel-skin" style="border-radius: 20px">
							<div class="text-center" style="padding-top:20px; ">

									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Welcome!
Log In to your Account</h3>
									
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="login.php" method="POST">
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="email" name="loginEmail" id="loginEmail" class="form-control input-md" placeholder="Email" style="height: 50px;background: whitesmoke"  required>
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>

										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="password" name="loginPassword" id="loginPassword" class="form-control input-md" style="height: 50px;background: whitesmoke" required>
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-xs-12 col-sm-12 col-md-4">
										<input type="submit" value="Submit" name="loginBtn" class="btn btn-skin btn-block btn-lg">
									     </div>
									     <div class="col-md-4"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p class="lead-footer text-center">Forgot Password?  <a href="login.php?action=reset" style="color:#5bc0de">  RESET</a></p>
											</div>
										</div>
										
									
									</form>
								</div>
								<p class="lead-footer text-center">* New,Don't have account?   <a href="signup.php" style="color:#5bc0de">  CREATE ACCOUNT</a></p>
							</div>	
						<?php ;}elseif(isset($_GET['action']) && $_GET['action']=='reset' ){ ?>

                              <div class="panel panel-skin" style="border-radius: 20px;">
							<div class="text-" style="padding-top:5px; ">

								<h3><a href="login.php"><span class="fa  fa-long-arrow-left"></span></a></h3> 
									<div class="text-center">
											<h3>Forgot Password</h3>
                            Enter the email that's associated with your account.
										</div>
									</div>
									<div class="panel-body">
										
									<form role="form" class="lead" action="request_demo.php" method="POST">
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="email" name="email" id="email" class="form-control input-md" style="height: 50px;background: whitesmoke" placeholder="Enter your Email" required>
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>

										
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-xs-12 col-sm-12 col-md-4">
										<input type="submit" value="Submit" name="requestDemo" class="btn btn-skin btn-block btn-lg">
									     </div>
									     <div class="col-md-4"></div>
										</div>
										
									
									</form>
								</div>
								&nbsp;
							</div>	
							<?php ;} ?>
						</div>
						</div>
					</div>
					<div class="col-lg-3">
					

					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->

	
	
	
	
	
	
	

	
	

	<?php include'include/footer.php';?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<?php include'include/script.php';?>
<script type="text/javascript">
	function reset(){
		
	load('login.php?action=reset');
}

</script>

</body>

</html>
