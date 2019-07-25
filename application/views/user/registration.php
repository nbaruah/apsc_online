<!DOCTYPE html>
<html lang="en">

<!-- Always include the HTML5 doctype at the beginning of the page, along with the lang attribute and the correct character set -->
<head>
<title>User Registration</title>
<meta charset="utf-8">
<!-- To ensure proper rendering and touch zooming in mobile devices, add the following <meta> tag inside the <head> element: -->
<meta name="viewport" content="width=device-width, initial-scale=1">
 <?php echo link_tag("assets/css/bootstrap.min.css"); ?>
</head>

<body>

	<nav
		class="navbar navbar-dark navbar-expand-md bg-primary justify-content-center">
		<a href="/" class="navbar-brand mr-0">Assam Public Service Commission</a>
		<button class="navbar-toggler ml-1" type="button"
			data-toggle="collapse" data-target="#collapsingNavbar2">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div
			class="navbar-collapse collapse justify-content-between align-items-center w-100"
			id="collapsingNavbar2">
			<ul class="navbar-nav mx-auto text-center">
				<li class="nav-item active"><a class="nav-link" href="#">Link <span
						class="sr-only">Home</span></a></li>
				<li class="nav-item"><a class="nav-link" href="#">Codeply</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
			</ul>
			<ul
				class="nav navbar-nav flex-row justify-content-center flex-nowrap">
				<li class="nav-item"><a class="nav-link" href="">Username</a></li>
				<li class="nav-item"><a class="nav-link" href="">Signout</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
	<div class="card border-primary mb-3" style="margin-top: 5px;">
  		<div class="card-header bg-success"><center style="color:#fff;"><b>Registration</b></center></div>
  		<div class="card-body">
		
		<!-- <form action="#"> -->
		<?= form_open('user/register'); ?>
			<!-- Candidate's Name -->
			<div class="form-row">
				<label class="col-sm-2 col-form-label col-form-label-sm">Candidate's
					Name</label>
				<div class="form-group col-sm-4">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->c_fname(); ?>" placeholder="First Name">
				</div>
				<div class="form-group col-sm-3">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->c_mname(); ?>" placeholder="Middle Name">
				</div>
				<div class="form-group col-sm-3">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->c_lname(); ?>" placeholder="Last Name">
				</div>
			</div>

			<!-- Father's Name -->
			<div class="form-row">
				<label class="col-sm-2 col-form-label col-form-label-sm">Father's
					Name</label>
				<div class="form-group col-sm-4">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->f_fname(); ?>" placeholder="First Name">
				</div>
				<div class="form-group col-sm-3">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->f_mname(); ?>" placeholder="Middle Name">
				</div>
				<div class="form-group col-sm-3">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->f_lname(); ?>" placeholder="Last Name">
				</div>
			</div>

			<!-- Mother's Name -->
			<div class="form-row">
				<label class="col-sm-2 col-form-label col-form-label-sm"> Mother's
					Name <small class="text-success">(Please Do not use
						Shri/Mr./Ms./Dr./Mrs. etc.)</small>
				</label>
				<div class="form-group col-sm-4">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->m_fname(); ?>" placeholder="First Name">
				</div>
				<div class="form-group col-sm-3">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->m_mname(); ?>" placeholder="Middle Name">
				</div>
				<div class="form-group col-sm-3">
					<input type="text" class="form-control form-control-sm"
						name="<?php echo $this->reg_frm->m_lname(); ?>" placeholder="Last Name">
				</div>
			</div>

			<!-- Gender, DOB  and Community -->
			<div class="form-row">
				<label class="col-form-label col-form-label-sm col-sm-2">Gender</label>
				<div class="form-group col-sm-2">
					<select class="form-control form-control-sm" name="<?php echo $this->reg_frm->gender(); ?>">
						<option>Small select</option>
					</select>
				</div>

				<label class="col-form-label col-form-label-sm col-sm-2"> Date of
					Birth</label>
				<div class="form-group col-sm-2">
					<input type="text" class="form-control form-control-sm" name="<?php echo $this->reg_frm->dob(); ?>"
						placeholder="Date of Birth">
				</div>

				<label class="col-form-label col-form-label-sm col-sm-2">Community</label>
				<div class="form-group col-sm-2">
					<select class="form-control form-control-sm" name="<?php echo $this->reg_frm->comm(); ?>">
						<option>Small select</option>
					</select>
				</div>
			</div>


			<!-- State, Place of birth and Nationality-->
			<div class="form-row">
				<label class="col-form-label col-form-label-sm col-sm-2">State</label>
				<div class="form-group col-sm-2">
					<select class="form-control form-control-sm" name="<?php echo $this->reg_frm->state(); ?>">
						<option>Assam</option>
						<option>Arunachal Pradesh</option>
					</select>
				</div>
				<label class="col-form-label col-form-label-sm col-sm-2">Place of Birth</label> 
				<div class="form-group col-sm-2">
					<input type="text" class="form-control form-control-sm" name="<?php echo $this->reg_frm->pob(); ?>" placeholder="place of birth">
				</div>
				<label class="col-from-label col-form-label-sm col-sm-2">Nationality</label>
				<div class="form-group col-sm-2">
					<input type="text" class="form-control form-control-sm" name="<?php echo $this->reg_frm->nation(); ?>" placeholder="Nationality">
				</div>
			</div>

			<!-- PWD, PWD Caategory and PWD% -->
			<div class="form-row">
				<label class="col-form-label col-form-label-sm col-sm-2">Are You Physically Challenged?</label>
				<div class="form-group col-sm-2">
					<select class="form-control form-control-sm" name="<?php echo $this->reg_frm->pwd(); ?>">
						<option>Assam</option>
						<option>Arunachal Pradesh</option>
					</select>
				</div>
				<label class="col-form-label col-form-label-sm col-sm-2">Physically Challenged Category</label> 
				<div class="form-group col-sm-2">
					<select class="form-control form-control-sm" name="<?php echo $this->reg_frm->pwd_cat(); ?>">
						<option>Assam</option>
						<option>Arunachal Pradesh</option>
					</select>
				</div>
				<label class="col-from-label col-form-label-sm col-sm-2">Percentage</label>
				<div class="form-group col-sm-2">
					<select class="form-control form-control-sm" name="<?php echo $this->reg_frm->pwd_per(); ?>">
						<option>Assam</option>
						<option>Arunachal Pradesh</option>
					</select>
				</div>
			</div>
			
			<!-- Mobile Number and Email address -->
			<div class="form-row">
				<label class="col-form-label col-form-label-sm col-sm-2">Mobile number</label>
				<div class="form-group col-sm-2">
					<input type="number" class="form-control form-control-sm" name="<?php echo $this->reg_frm->mobile(); ?>" placeholder="Mobile Number" min="10" max="10">
				</div>
				<label class="col-form-label col-form-label-sm col-sm-2">E-mail Address</label> 
				<div class="form-group col-sm-2">
					<input type="email" class="form-control form-control-sm" name="<?php echo $this->reg_frm->email(); ?>" placeholder="E-mail Address">
				</div>
				<label class="col-from-label col-form-label-sm col-sm-2">Confirm E-mail Address</label>
				<div class="form-group col-sm-2">
					<input type="email" class="form-control form-control-sm" name="<?php echo $this->reg_frm->re_email(); ?>" placeholder="Confirm E-mail">
				</div>
			</div>
			
			<!-- Password and Captcha -->
			<div class="form-row">
				<label class="col-form-label col-form-label-sm col-sm-2">Desired Password</label>
				<div class="form-group col-sm-2">
					<input type="password" class="form-control form-control-sm" name="<?php echo $this->reg_frm->password(); ?>" placeholder="Password">
				</div>
				<label class="col-form-label col-form-label-sm col-sm-2">Confirm Password</label> 
				<div class="form-group col-sm-2">
					<input type="password" class="form-control form-control-sm" name="<?php echo $this->reg_frm->re_password(); ?>" placeholder="Confirm Password">
				</div>
				<label class="col-from-label col-form-label-sm col-sm-2">Confirm Random Image</label>
				<div class="form-group col-sm-2">
					<input type="email" class="form-control form-control-sm" name="<?php echo $this->reg_frm->captcha(); ?>" placeholder="Confirm image">
				</div>
			</div>

			<center>
				<button type="submit" class="btn btn-success btn-sm">Submit</button>
				<button type="reset" class="btn btn-danger btn-sm">Reset</button>
			</center> 
		</form>
	</div>
</div>
	</div>

</body>
</html>


