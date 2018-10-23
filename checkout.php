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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	 <form action="/action_page.php">
        <div class="row">
		  <h4>Checkout</h4>
          <div class="six columns">
            <h6>Billing Address</h6>
            <label for="name"> Full Name</label>
            <input type="text" id="name" name="firstname" placeholder="John M. Doe">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="six columns">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h6>Payment</h6>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
        
	

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
