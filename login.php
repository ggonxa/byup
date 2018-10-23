<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	
	if (logged_in()) {
		redirect_to("product.php");
	}

	include_once("includes/form_functions.php");
	
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.
		$errors = array();

		// perform validations on the form data
		$required_fields = array('u_name', 'u_passw');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('u_name' => 30, 'u_passw' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));

		$u_name = trim(mysql_prep($_POST['u_name']));
		$u_passw = trim(mysql_prep($_POST['u_passw']));
		$hashed_u_passw = sha1($u_passw);
		$hashed_u_passw = substr($hashed_u_passw,0,30);
		
		if ( empty($errors) ) {
			// Check database to see if u_name and the hashed u_passw exist there.
			$query = "SELECT user_id, u_name FROM user_tb WHERE (u_name = '$u_name') AND (hashed_u_passw = '$hashed_u_passw') LIMIT 1";
 
 			$result_set = mysql_query($query);
			confirm_query($result_set);
			if (mysql_num_rows($result_set) == 1) {
				// u_name/u_passw authenticated
				// and only 1 match
				$found_user = mysql_fetch_array($result_set);
				$_SESSION['user_id'] = $found_user['user_id'];
				$_SESSION['u_name'] = $found_user['u_name'];
				
				redirect_to("product.php");
			} else {
				
				// u_name/u_passw combo was not found in the database
				$message = "user name/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
		
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
		$u_name = "";
		$u_passw = "";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>BYU Printing</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
	
	
</head>
<body>
	  

<!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
	  
<!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  
	  <div class="header">
	  <div class="columna">
		  <a href="/index.html"><img src="images/BYU_logo.png" class="logo-byu"></a>
	  </div>
	  <div class="columna title">
		Custom Laser Engravings
	  </div>
	  	<div class="columna header-right">
			<a href="/login.php">Login</a>
			<a href="/signup.php">SignUp</a>
			<a href="/cart.php" class="active">Cart</a>
		</div>  
	  </div>
	  
  <!-- Main Content
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->	  
    <div class="row">
      <div class="eleven columns">
        <h4>Login</h4>
		  
		 <!-- Product list -->	
	<div class="productSection">

		<form>
		  <div class="row">
			<div class="five columns">
			  <label for="exampleEmailInput" >User Name</label>
			  <input class="u-full-width" type="name" placeholder="name" value="<?php echo htmlentities($u_name); ?>" id="exampleEmailInput">
			</div>
			  <div class="five columns">
			  <label for="Password">Password</label>
			  <input class="u-full-width" type="password" placeholder="" id="exampleEmailInput"value="<?php echo htmlentities($u_passw); ?>" >
			</div>
			<div class="twelve columns" style="text-align: center; padding-top: 20px;">
			  <input class="button-primary" type="submit" value="Submit">
			</div>
		  </div>
		  
		</form>
	
	
	</div>
		  
		  
		  
      </div>
    </div>
	  
<!-- Footer Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="footer">
	  <p>POWERED BY Gerorge for BYU PRINT & MAIL</p>
	</div>
	   
</div><!-- End Container -->

	
 
	
	
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
