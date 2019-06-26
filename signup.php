<?php include'include/config.php';?>
<!DOCTYPE html>
<html lang="en">

<?php include'include/header.php';?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" onload="hideDiv()">

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
					
					?><div id="errormsg"></div>
						<div class="form-wrapper" >
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
							
							<div class="panel panel-skin" id="signupDiv" style="border-radius: 20px">
							<div class="text-center" style="padding-top:20px; ">

									<h3 class="panel-title"><span class="fa "></span> Create New School Account</h3>
									
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="" method="POST">
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="text" name="firstName" id="firstName" class="form-control input-md" placeholder="Your First Name" style="height: 45px;background: white"  required>
												</div>
												<div id="nameError" style="color: red"></div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="text" name="lastName" id="lastName" class="form-control input-md" placeholder="Your Last Name" style="height: 45px;background: white"  required>
												</div>
												<div id="nameError" style="color: red"></div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="email" name="email" id="email" class="form-control input-md" placeholder="Email Address" style="height: 45px;background: white"  required>
												</div>
												<div id="emailError" style="color: red"></div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>

										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="password" name="password" id="password" class="form-control input-md" style="height: 45px;background: white" placeholder="Password" required>
												</div>
												<div id="pass1Error" style="color: red"></div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="password" name="confirmPassword" id="confirmPassword" class="form-control input-md" placeholder="Confirm Password" style="height: 45px;background: white" required>
												</div>
												<div id="pass2Error" style="color: red"></div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-xs-12 col-sm-12 col-md-6">
										<button type="button"  name="continue" class="btn btn-skin btn-block btn-lg submitBtn" onclick="continueFun()">CONTINUE </button>
									     </div>
									     <div class="col-md-3"></div>
										</div>
										
										<p class="lead-footer">*Already have account?   <a href="login.php" style="color:#5bc0de"> login</a></p>
									
									</form>
								</div>
								&nbsp;
							</div>	
						

                              <div class="panel panel-skin "  id="continueDiv" style="border-radius: 20px">
							<div class="text-" style="padding-top:5px; ">

								<h3><a href="#" onclick="frontFun()"><span class="fa fa-long-arrow-left"></span></a></h3> 
									<div class="text-center">
											<h3>Last Step</h3>
                           Tell us about yourself so 
                            we can best serve you
										</div>
									</div>
									<div class="panel-body">
										
									<form role="form" class="lead" action="" method="POST">
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="text" name="school_name" id="school_name" class="form-control input-md" style="height: 50px;background: whitesmoke" placeholder="School or Program Name" required>
												</div>
												<div id="schoolNameError" style="color: red"></div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="text" name="phone" id="phone" class="form-control input-md" style="height: 50px;background: whitesmoke" placeholder="Phone Number" required>
												</div>
												<div id="phoneError" style="color: red"></div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
											<div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													
													<input type="number" min="0" name="numberOfStudent" id="numberOfStudent" class="form-control input-md" style="height: 50px;background: whitesmoke" placeholder="How many student attend?" required>
												</div>
												<div id="studentNoError" style="color: red"></div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												
											</div>
										</div>

										
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-xs-12 col-sm-12 col-md-4">
										<button type="button"  name="signupBtn" class="btn btn-skin btn-block btn-lg" onclick="signupFun()">SIGNUP</button>
									     </div>
									     <div class="col-md-4"></div>
										</div>
										
									
									</form>
								</div>
								&nbsp;
							</div>	
							<?php //;} ?>
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
		alert("yes");
	
	load('login.php?action=reset');
}

</script>
<script type="text/javascript">
	function continueFun(){
		
	var firstName= document.getElementById('firstName').value;
	var lastName= document.getElementById('lastName').value;
	
	var email=document.getElementById('email').value;
	var pass1=document.getElementById('password').value;
	var pass2=document.getElementById('confirmPassword').value;
	
	if ( firstName =='') {
 $('#nameError').html('Your name is required');
	}else{
		$('#nameError').html('');
	}
	if ( lastName =='') {
 $('#nameError').html('Your name is required');
	}else{
		$('#nameError').html('');
	}
	if (email=='') {
		$('#emailError').html('Email is required');
	}else{
		$('#emailError').html('');
	}
	if (pass1=='') {
		$('#pass1Error').html('Password is required');
	}else{
		$('#pass1Error').html('');
	}
	if (pass2=='') {
		$('#pass2Error').html('Confirm your Password');
	}else{
		$('#pass2Error').html('');
	}
	if (firstName !=='' && lastName !=='' && email !=='' && pass1 !=='' && pass2 !=='') {
     $('#signupDiv').hide();
     $('#continueDiv').show();
	}
 
}
function signupFun(){
		
	var firstName= document.getElementById('firstName').value;
	var lastName= document.getElementById('lastName').value;
	
	var email=document.getElementById('email').value;
	var pass1=document.getElementById('password').value;
	var pass2=document.getElementById('confirmPassword').value;

	var school_name=document.getElementById('school_name').value;
	var phone=document.getElementById('phone').value;
	var numberOfStudent=document.getElementById('numberOfStudent').value;
	
	if ( firstName =='') {
 $('#nameError').html('Your name is required');
	}
	if ( lastName =='') {
 $('#nameError').html('Your name is required');
	}
	if (email=='') {
		$('#emailError').html('Email is required');
	}
	if (pass1=='') {
		$('#pass1Error').html('Password is required');
	}
	if (pass2=='') {
		$('#pass2Error').html('Confirm your Password');
	}

	if (school_name=='') {
		$('#schoolNameError').html('School name is required');
	}else{
		$('#schoolNameError').html('');
	}
	if (phone=='') {
		$('#phoneError').html('Phone Numberis required');
	}else{
		$('#phoneError').html('');
	}
	if (numberOfStudent=='') {
		$('#studentNoError').html('Number of student attend?');
	}else{
		$('#studentNoError').html('');
	}
	
	if (firstName !=='' && lastName !=='' && email !=='' && pass1 !=='' && pass2 !=='' && school_name !=='' && phone !=='' && numberOfStudent !=='') {
		if(pass1==pass2){
			
var details= "&signup=checkreg&fName="+firstName +"&lName="+lastName +"&email="+email+"&password="+pass1+"&school_name="+school_name+"&phone="+phone+"&numberOfStudent="+numberOfStudent;
  $.ajax({
  type: "POST",
  url: "check_registration.php",
  data: details,
  cache: false,
  success: function(data) {
  	alert(data);
   
  
  }

  });


    }else{
	 $('#signupDiv').show();
     $('#continueDiv').hide();
	$('#pass2Error').html("Your Password didn't not match");
}
	}

 
}
function frontFun(){
	
 $('#signupDiv').show();
 $('#continueDiv').hide();
}
function hideDiv(){
 $('#continueDiv').hide();
}
</script>
</body>

</html>
