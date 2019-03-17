	<?php include "header.php"; ?>
	<style>	
	.cards{
		height:auto;
		width: 250px;
		padding: 30px 0;
		border-radius: 5px;
    	margin-bottom: 20px;
        background: #fff;
        padding: 20px;
		text-align: center;
		font-weight: bold;
		color:#5cb85c;

	}
	.cards:hover
	{
		box-shadow: 5px 5px 5px 5px grey;
		transform:scale(1.05);
		transition:all .3s ease-in-out;
	}
	.act_btn
	{
		border: none;
		background-color:#FF6600;
		color: white;
		width:26%;
		text-transform: uppercase;
		padding: 5px 5px;
		border-radius: 3px;
		margin:5px;
		border-bottom-style: solid;

	}
	.act_btn:hover{
		background-color:#5cb85c;
	}
	.cimg{
		width:100%;
	}
	</style>
	
	<div class='col-md-4'>
		<p><br><br></p>
		<div class='cards'>
			<img class="cimg" src='images/apple.jpg' style='width:100%; height:200px;'/>
			
			Apple<br>
			40 Rs<br>
			<button pid='$pro_id' id='product' class='act_btn '>Add To Cart</button>
						<button pid='$pro_id' id='product' class='act_btn '>Add To Cart</button>

		</div>
	</div>
	
	
		<div class="col-md-6" style="margin-top:30px">
		<div class="signup-form">
	<form action="submit.html" name="buyer" method="get">
		<h2>Create an Account As A Buyer</h2>
	<div class="form-group">
						<input type="text" class="form-control input-lg" name="name" placeholder="Enter Name" >
				</div>
	<div class="form-group">
						<input type="email" class="form-control input-lg" name="email" placeholder="Enter Email Address" >
					</div>
	<div class="form-group">
						<input type="text" class="form-control input-lg" name="mobile" placeholder="Enter Contact number" >
					</div>
	<div class="form-group row">
						<div class="form-group">
							<div class="col-sm-5"><label class="radio-inline">Male &nbsp;</label><input type="radio" name="gender" value="Male"></div>
							<div class="col-sm-5"><label class="radio-inline">Female &nbsp;</label><input type="radio" name="gender" value="Female"></div>
						</div>
					</div>
	<div class="form-group">
							<input type="password" class="form-control input-lg" name="pwd" id="pwd" placeholder="Enter Password" >
						</div>
	<div class="form-group">
							<input type="password" class="form-control input-lg" name="cpwd" placeholder="Confirm Password" >
						</div> 
	<div class="form-group">
							<label class="radio-inline">I Agree with the<a href="#"> Terms and Conditions</a></label>&nbsp;&nbsp;<input type="checkbox" name="agree" value="agree"> 
								
	</div>
	<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button></div>
					
	</form>
			</div>
		</div>
		<div class="col-md-6" style="margin-top:30px">
		<div class="signup-form">
			<form action="" name="seller" method="post">
				<h2>Create an Account As A Seller/Farmer</h2>
					<div class="form-group">
						<input type="text" class="form-control input-lg" name="name" placeholder="Enter Name" required="required">
					</div>
					<div class="form-group">
						<input type="email" class="form-control input-lg" name="email" placeholder="Enter Email Address" required="required">
					</div>
				<div class="form-group">
						<input type="text" class="form-control input-lg" name="mobile" placeholder="Enter Contact number" >
					</div>

					<div class="form-group row">
						<div class="form-group">
							<div class="col-sm-5">
								<label class="radio-inline">
									<input type="radio" name="gender" checked>Male 
								</label>
							</div>
							<div class="col-sm-5">
								<label class="radio-inline">
									<input type="radio" name="gender">Female
								</label>
							</div>
						</div>
					</div>
					<!--	<div class="form-group">
							<select name="District">
								<option value="Mumbai City">Mumbai City</option>
								<option value="Pune">Pune</option>
								<option value="Nagpur">Nagpur</option>
								<option value="Nashik">Nashik</option>
								<option value="Palghar">Palghar</option>
							</select>					
							<select name="Taluka">
								<option value="Andheri">Andheri</option>
								<option value="Kurla">Kurla</option>
								<option value="Borivali">Borivali</option>
							</select>
						</div>
						<div class="form-group">
						<p>Address</p>
							<textarea rows="2" cols="36" name="Address" required="required">
							</textarea>
						</div>-->
						<div class="form-group">
							<input type="password" class="form-control input-lg" name="pwd" placeholder="Enter Password" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-lg" name="cpwd" placeholder="Confirm Password" required="required">
						</div>
				
						
						<label class="radio-inline">
						<b>Select Organic Certification details</b>
						</label>
						<div class="form-group">
							
								<label class="radio-inline">
									Self Declared Farmer &nbsp;
								</label><input type="radio" name="cert">
							<br>
							
								<label class="radio-inline">
									PGS India Organic &nbsp;
								</label><input type="radio" name="cert">
							<br>
							
								<label class="radio-inline">
									Other Organic Certificate &nbsp;
								</label>
								<input type="radio" name="cert">
						</div>
						<div class="form-group">
							<label class="radio-inline">I Agree with the<a href="#"> Terms and Conditions</a></label>&nbsp;&nbsp;<input type="checkbox" name="agree" value="agree"> 		
						</div>

						<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>
						</div>
					<div class="text-center">Already have an account? <a href="login.php">Login here</a></div>

			</form>
						

	</body>
	</html>
