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
					<div class="col-lg-2">
					

					</div>
					<div class="col-lg-8">
					<?php
					if(isset($_GET['send'])){
                      echo' <div class="alert alert-success alert-dismissable">
                           <button type="button" class="close" data-dismiss="alert"
                           aria-hidden="true">
                           &times;
                           </button>
                          Email sent  successfully.
                          </div>';   
                         }
                     if (isset($_POST['requestDemo'])) {

                     	$customerNeed='';
                     	$facility_name=$_POST['facility_name'];
                     	$customer_name=$_POST['customer_name'];
                     	$email=$_POST['email'];
                 	    $phone=$_POST['phone'];
                 	    $customerNeed=$_POST['customerNeed'];
             	        
                       $from=$email;
                       $fromName=$customer_name;
                       $to='info@kindertraks.com';
                       $subject="Request For Demo";
                       $msg=$customerNeed;
                       $message="Name:".$customer_name."<br>Phone:  "  .$phone. "<br>Facility Name:  " .$facility_name. " <br> Email: ".$email." <br>Description:  "  .$msg ;
                       $headers =  'MIME-Version: 1.0' . "\r\n"; 
                       $headers .= 'From: '.$fromName .' <'.$from.'>' . "\r\n";
                       $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

                       //mail($to, $subject, $body, $headers);
                       $datetime = date_create()->format('Y-m-d H:i:s');
                       $send=mail($to,$subject,$message,$headers);
                       if($send){
         
	                      echo '<script> window.location="request_demo.php?send=True" </script>';
	                        }else{
	                            echo' <div class="alert alert-danger alert-dismissable">
	                                   <button type="button" class="close" data-dismiss="alert"
	                                   aria-hidden="true">
	                                   &times;
	                                  </button>
	                                  Sorry! please try again.
	                                 </div>';  
	                            }

                     }
					?>
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Request a Live Demo</h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="request_demo.php" method="POST">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Facility Name</label>
													<input type="text" name="facility_name" id="facility_name" class="form-control input-md"  required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Name</label>
													<input type="text" name="customer_name" id="customer_name" class="form-control input-md"  required>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Email</label>
													<input type="email" name="email" id="email" class="form-control input-md"  required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Phone number</label>
													<input type="text" name="phone" id="phone" class="form-control input-md" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label>Describe your need</label>
													
													<textarea  type="textarea" name="customerNeed" id="customerNeed" class="form-control input-md"></textarea>
												</div>
											</div>
											
										</div>
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-xs-12 col-sm-12 col-md-4">
										<input type="submit" value="Submit" name="requestDemo" class="btn btn-skin btn-block btn-lg">
									     </div>
									     <div class="col-md-4"></div>
										</div>
										<p class="lead-footer">* We'll contact you by phone & email later</p>
									
									</form>
								</div>
							</div>	
						
						</div>
						</div>
					</div>
					<div class="col-lg-2">
					

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


</body>

</html>
