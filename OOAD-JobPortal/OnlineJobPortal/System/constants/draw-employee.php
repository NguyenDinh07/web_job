<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="login-box-wrapper">
							
<div class="modal-header">
<h4 class="modal-title text-center">Create your account for free</h4>
</div>

<!-- <div class="modal-body"> -->
<div class="modal-body-new">
																
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">

<!-- <div class="form-group">  -->
<div class="inputBox">
<!-- <label>Full Name</label> -->
<!-- <input class="form-control" placeholder="Enter your full name" name="fname" required type="text">  -->
<input  name="fname" required type="text">
<span>Full name</span>
</div>
												
</div>

<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Email</label>
<input class="form-control" placeholder="Enter your email" name="lname" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>User Name</label>
<input class="form-control" placeholder="Enter your User name" name="email" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>Password</label>
<input class="form-control" placeholder="Min 8 and Max 20 characters" name="password" required type="password"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>Password Confirmation</label>
<input class="form-control" placeholder="Re-type password again" name="confirmpassword" required type="password"> 
</div>
												
</div>
												
<input type="hidden" name="acctype" value="101">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">Register</button>
</div>
										
</div>
</form>