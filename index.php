<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>

<!-- Css -->
  <link rel="stylesheet" href="css/estilo.css" />	
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

<div class="header" id="myHeader">
	
  <div class="logo-container">
      <img class="logo-byu" src="img/BYU_logo.png">
  </div>
	
  <div class="center">
	  <h2>Custom Laser Engravings</h2>
  </div>
	
  <div class="cart">
	  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

		<div id="id01" class="modal">

		  <form class="modal-content animate" action="/action_login.php">
			<div class="imgcontainer">
			  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>

			<div class="container">
			  <label for="uname"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="uname" required>

			  <label for="psw"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="psw" required>

			  <button type="submit" class="loginbtn">Login</button>
			  
			</div>

			<div class="container" style="background-color:#002040">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				<label>
				<input type="checkbox" checked="checked" name="remember" > Remember me
			  </label>
			  <span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		  </form>
		</div>

	  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>

		<div id="id02" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		  <form class="modal-content" action="/action_registration.php">
			<div class="container">
			  <h1>Registration</h1>
			  <p>Please fill in this form to create an account.</p>
			  <hr>
			  <label for="email"><b>Email</b></label>
			  <input type="text" placeholder="Enter Email" name="email" required>

			  <label for="psw"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="psw" required>

			  <label for="psw-repeat"><b>Repeat Password</b></label>
			  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

			  <label>
				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			  </label>

			  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

			  <div class="clearfix">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				<button type="submit" class="signupbtn">Sign Up</button>
			  </div>
			</div>
		  </form>
		</div>
		<img src="img/cartImage.png"></div>
	
</div>

<div class="main"> 
<!-- Titles and main picture -->	
	<div class="infoText infoTitle">
		Our precision laser engraver allows you to create custom gifts, plaques,
		awards, nameplates and badges, or other custom projects you have in mind.
	</div>
	<div class="infoText infoSub">Engraves on wood, metal, stone, glass, and acrylic.</div>	
	<div class="infoPict">
			<img src="img/1.jpg">
	</div>
	<div class="row">
			<ul class="product-group list-inline col-md-12">
				<!-- ngRepeat: product in productList --><li ng-repeat="product in productList" class="ng-scope">
					<a href="#designer">
						<button class="btn btn-thumbnail hvr-float" ng-click="editProduct(product.id);">
							<img class="productThumb" ng-src="images/AZ_Gila/thumb.jpg" src="images/AZ_Gila/thumb.jpg"><br>
							<p class="caption ng-binding">Gila, Arizona</p>
							<p style="margin-bottom:0px" class="ng-binding"></p>
						</button>
					</a>
				</li><!-- end ngRepeat: product in productList --><li ng-repeat="product in productList" class="ng-scope">
					<a href="#designer">
						<button class="btn btn-thumbnail hvr-float" ng-click="editProduct(product.id);">
							<img class="productThumb" ng-src="images/AZ_Gilbert/thumb.jpg" src="images/AZ_Gilbert/thumb.jpg"><br>
							<p class="caption ng-binding">Gilbert, Arizona</p>
							<p style="margin-bottom:0px" class="ng-binding"></p>
						</button>
					</a>
				</li><!-- end ngRepeat: product in productList --><li ng-repeat="product in productList" class="ng-scope">
					<a href="#designer">
						<button class="btn btn-thumbnail hvr-float" ng-click="editProduct(product.id);">
							<img class="productThumb" ng-src="images/AZ_Mesa/thumb.jpg" src="images/AZ_Mesa/thumb.jpg"><br>
							<p class="caption ng-binding">Mesa, Arizona</p>
							<p style="margin-bottom:0px" class="ng-binding"></p>
						</button>
					</a>
				</li><!-- end ngRepeat: product in productList --><li ng-repeat="product in productList" class="ng-scope">
					<a href="#designer">
						<button class="btn btn-thumbnail hvr-float" ng-click="editProduct(product.id);">
							<img class="productThumb" ng-src="images/AZ_Phoenix/thumb.jpg" src="images/AZ_Phoenix/thumb.jpg"><br>
							<p class="caption ng-binding">Phoenix, Arizona</p>
							<p style="margin-bottom:0px" class="ng-binding"></p>
						</button>
					</a>
				</li><!-- end ngRepeat: product in productList --><li ng-repeat="product in productList" class="ng-scope">
					<a href="#designer">
						<button class="btn btn-thumbnail hvr-float" ng-click="editProduct(product.id);">
							<img class="productThumb" ng-src="images/AZ_Snowflake/thumb.jpg" src="images/AZ_Snowflake/thumb.jpg"><br>
							<p class="caption ng-binding">Snowflake, Arizona</p>
							<p style="margin-bottom:0px" class="ng-binding"></p>
						</button>
					</a>
				</li><!-- end ngRepeat: product in productList --><li ng-repeat="product in productList" class="ng-scope">
					<a href="#designer">
						<button class="btn btn-thumbnail hvr-float" ng-click="editProduct(product.id);">
							<img class="productThumb" ng-src="images/AZ_Tucson/thumb.jpg" src="images/AZ_Tucson/thumb.jpg"><br>
							<p class="caption ng-binding">Tucson, Arizona</p>
							<p style="margin-bottom:0px" class="ng-binding"></p>
						</button>
					</a>
				</li><!-- end ngRepeat: product in productList -->
			</ul>
		</div>
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
							
?>		<div class="productCol">
           <li style="list-style-type: none;">
			   <div class="prodname"><?php echo $p_name; ?></div>
			   <div class="prodimage"><img src="img/<?php echo $p_pict; ?>"></div>
				<div class="prodprice"><?php echo $p_price; ?></div>
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

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
	
<script>
// Get the modal_1
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	
<script>
// Get the modal_2
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		
</body>
</html>