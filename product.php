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
	
  <!-- Open Database and Tables
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->	
<?php
	mysql_connect("localhost","agonzal1_ubyu","pw_byu"); 
	mysql_select_db("agonzal1_print_byu") or die("Unable to select database"); 
	$data = "SELECT * FROM `prod_tb` ORDER BY p_id";
	$result=mysql_query($data) or die("Error: ". mysql_error(). " with query ". $query);
	$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
?>	
	
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
        <h4>Temples</h4>
		  
		 <!-- Product list -->	
	<div class="productSection">
		<ul><!-- ngRepeat: product in productList -->
<?php
		$i=0;
		while ($i < $num) {
            $p_id=mysql_result($result,$i,"p_id");
			$p_name=mysql_result($result,$i,"p_name");
			$p_price=mysql_result($result,$i,"p_price");
			$p_pict=mysql_result($result,$i,"p_pict");
							
?>		<div class="twos columns">
           <li style="list-style-type: none;">
			   <div class="prodname"><?php echo $p_name; ?></div>
			   <div class="prodimage"><img src="images/<?php echo $p_pict; ?>"></div>
			   <div class="prodprice"><?php echo "$ "; ?><?php echo $p_price; ?></div>
			    <label for="quantity" >Quantity</label>
			   <div class="prodname"><input type="number" name="quantity" min="1" max="5"></div>
			   <button type="submit" class="signupbtn">Buy</button>
		   </li>
		</div>
<?php      
         $i++;
         }
		 mysql_close();
?>	
		</ul><!-- end ngRepeat: product in productList -->
	
	
	
	
	
	
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
