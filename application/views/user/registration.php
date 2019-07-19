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
	
<nav class="navbar navbar-dark navbar-expand-md bg-primary justify-content-center">
    <a href="/" class="navbar-brand mr-0">Assam Pblic Service Commission</a> 
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item active">
                <a class="nav-link" href="#">Link <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Codeply</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a> 
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
            <li class="nav-item"><a class="nav-link" href="">Username</a></li>
            <li class="nav-item"><a class="nav-link" href="">Signout</a></li>
        </ul>
    </div>
</nav>

	<div class="container" style="box-shadow: 0 0 0 2px black;" >
			<form action="#">
  <!-- Candidate's Name -->
  <div class="form-row"> 
    <label class="col-sm-2 col-form-label col-form-label-sm">Candidate's Name</label>
    <div class="form-group col-sm-4">
      <input type="text" class="form-control form-control-sm" name="c_fname" placeholder="First Name">
    </div>
    <div class="form-group col-sm-3">
      <input type="text" class="form-control form-control-sm" name="c_mname" placeholder="Middle Name">
    </div>
    <div class="form-group col-sm-3">
      <input type="text" class="form-control form-control-sm" name="c_lname" placeholder="Last Name">
    </div>
  </div>

  <!-- Father's Name -->
  <div class="form-row"> 
    <label class="col-sm-2 col-form-label col-form-label-sm">Father's Name</label>
    <div class="form-group col-sm-4">
      <input type="text" class="form-control form-control-sm" name="f_fname" placeholder="First Name">
    </div>
    <div class="form-group col-sm-3">
      <input type="text" class="form-control form-control-sm" name="f_mname" placeholder="Middle Name">
    </div>
    <div class="form-group col-sm-3">
      <input type="text" class="form-control form-control-sm" name="f_lname" placeholder="Last Name">
    </div>
  </div>

  <!-- Mother's Name -->
  <div class="form-row"> 
    <label class="col-sm-2 col-form-label col-form-label-sm">
    	Mother's Name <small class="text-success">(Please Do not use Shri/Mr./Ms./Dr./Mrs. etc.)</small>
    </label>
    <div class="form-group col-sm-4">
      <input type="text" class="form-control form-control-sm" name="m_fname" placeholder="First Name">
    </div>
    <div class="form-group col-sm-3">
      <input type="text" class="form-control form-control-sm" name="m_mname" placeholder="Middle Name">
    </div>
    <div class="form-group col-sm-3">
      <input type="text" class="form-control form-control-sm" name="m_lname" placeholder="Last Name">
    </div>
  </div>

<div class="form-row">
  <label class="col-form-label col-form-label-sm col-sm-2">Gender</label>
  <div class="form-group col-sm-2">
    <select class="form-control form-control-sm">
      <option>Small select</option>
    </select>
  </div>

  <label class="col-form-label col-form-label-sm col-sm-2"> Date of Birth</label>
  <div class="form-group col-sm-2">
    <input class="form-control form-control-sm" type="text" name="dob" placeholder="Date of Birth">
  </div>

  <label class="col-form-label col-form-label-sm col-sm-2">Community</label>
  <div class="form-group col-sm-2">
    <select class="form-control form-control-sm">
      <option>Small select</option>
    </select>
  </div>
</div>


			</form>
	</div>

</body>
</html>


