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
	
  <!-- Open Database and Validations
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->	

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
        <h4>Cart</h4>
		  
	<!-- Cart list -->	
	<div class="productSection">
		
		<div class="row">
			<div class="tres columnax">Image</div>
			<div class="tres columnax">Product</div>
			<div class="tres columnax">Price</div>
			<div class="tres columnax">Quantity</div>
			<div class="tres columnax">Remove</div>
			<div class="tres columnax">Total</div>
		</div>
		<div class="row">
			<div class="tres columnax" style="background-color: #FFF; color: #000;"><img src="images/Gila.jpg" style="width: 30%;"></div>
			<div class="tres columnax" style="background-color: #FFF; color: #000;">Gila</div>
			<div class="tres columnax">$20.00</div>
			<div class="tres columnax" style="background-color: #FFF; height: 28px; color: #000;"><input type="number" name="quantity" min="1" max="5" placeholder="1" style="width: 80px;"></div>
			<div class="tres columnax" style="background-color: #FFF; height: 28px;">
				<label class="example-send-yourself-copy">
					<input type="checkbox">
					<span class="label-body"></span>
				</label>
			</div>
			<div class="tres columnax" style="background-color: #FFF; color: #000;">$20.00</div>
		</div>
		<div class="row">
			<div class="tres columnax" style="background-color: #FFF; color: #000;"><img src="images/Mesa.jpg" style="width: 30%;"></div>
			<div class="tres columnax" style="background-color: #FFF; color: #000;">Mesa</div>
			<div class="tres columnax">$40.00</div>
			<div class="tres columnax" style="background-color: #FFF; height: 28px; color: #000;"><input type="number" name="quantity" min="1" max="5" placeholder="1" style="width: 80px;"></div>
			<div class="tres columnax" style="background-color: #FFF; height: 28px;">
				<label class="example-send-yourself-copy">
					<input type="checkbox">
					<span class="label-body"></span>
				</label>
			</div>
			<div class="tres columnax" style="background-color: #FFF; color: #000;">$40.00</div>
		</div>
		
		<div class="row">
			<div class="tres columnax" style="background-color: #FFF; color: #000; float: right;">$60.00</div>
			<div class="tres columnax" style="background-color: #FFF; color: #000; float: right;"><label>Subtotal</label></div>
		</div>
		<div class="row">
			<div class="tres columnax" style="background-color: #FFF; color: #000; float: right;">$4.00</div>
			<div class="tres columnax" style="background-color: #FFF; color: #000; float: right;"><label>Tax (5%)</label></div>
		</div>
		<div class="row">
			<div class="tres columnax" style="background-color: #FFF; color: #000; float: right;">$16.00</div>
			<div class="tres columnax" style="background-color: #FFF; color: #000; float: right">
			  <label>Shipping</label></div>
		</div>
		<div class="row">
			<div class="tres columnax" style="background-color: #FFF; color: #000; float: right;">$80.00</div>
			<div class="tres columnax" style="background-color: #FFF; color: #000; float: right"><label>Grand Total</label></div>
		</div>
		
	    <div class="row" style="text-align: center;">
	      <a href="checkout.php">
	        <button class="button button-primary" >Checkout</button>
	      </a> 
		</div>
	    </div>
		  
	</div>
	
	</div>
		  
		  
		  
      </div>
    </div>
	  
<!-- Footer Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="footer">
	  <p>POWERED BY Gerorge for BYU PRINT & MAIL</p>
	</div>
	   
</div><!-- End Container -->

<!-- Script for Cart -->	
   <script>
	/* Set rates + misc */
	var taxRate = 0.05;
	var shippingRate = 15.00; 
	var fadeTime = 300;


	/* Assign actions */
	$('.product-quantity input').change( function() {
	  updateQuantity(this);
	});

	$('.product-removal button').click( function() {
	  removeItem(this);
	});


	/* Recalculate cart */
	function recalculateCart()
	{
	  var subtotal = 0;

	  /* Sum up row totals */
	  $('.product').each(function () {
		subtotal += parseFloat($(this).children('.product-line-price').text());
	  });

	  /* Calculate totals */
	  var tax = subtotal * taxRate;
	  var shipping = (subtotal > 0 ? shippingRate : 0);
	  var total = subtotal + tax + shipping;

	  /* Update totals display */
	  $('.totals-value').fadeOut(fadeTime, function() {
		$('#cart-subtotal').html(subtotal.toFixed(2));
		$('#cart-tax').html(tax.toFixed(2));
		$('#cart-shipping').html(shipping.toFixed(2));
		$('#cart-total').html(total.toFixed(2));
		if(total == 0){
		  $('.checkout').fadeOut(fadeTime);
		}else{
		  $('.checkout').fadeIn(fadeTime);
		}
		$('.totals-value').fadeIn(fadeTime);
	  });
	}


	/* Update quantity */
	function updateQuantity(quantityInput)
	{
	  /* Calculate line price */
	  var productRow = $(quantityInput).parent().parent();
	  var price = parseFloat(productRow.children('.product-price').text());
	  var quantity = $(quantityInput).val();
	  var linePrice = price * quantity;

	  /* Update line price display and recalc cart totals */
	  productRow.children('.product-line-price').each(function () {
		$(this).fadeOut(fadeTime, function() {
		  $(this).text(linePrice.toFixed(2));
		  recalculateCart();
		  $(this).fadeIn(fadeTime);
		});
	  });  
	}


	/* Remove item from cart */
	function removeItem(removeButton)
	{
	  /* Remove row from DOM and recalc cart total */
	  var productRow = $(removeButton).parent().parent();
	  productRow.slideUp(fadeTime, function() {
		productRow.remove();
		recalculateCart();
	  });
	}
</script>	
 
	
	
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
