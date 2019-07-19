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

	<div class="container">
		<div class="row">
			<form action="#">
				<div class="form-group">
					<label>Name</label> 
					<input type="text" name="c_fname" class="form-control">
				</div>
			</form>
		</div>
	</div>

</body>
</html>


