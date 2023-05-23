<!DOCTYPE html>
<html lang="en" id="main_container2">
<head>
     <meta charset="utf-8"/>
    <meta name="keywords" content="HTML5, CSS"/>
    <meta name="author" content="Maisha Maimuna"/>

    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/part1.js"></script>


    <title>Card Payment</title>
    <link rel = "icon" href = 
"images/cp.png" 
        type = "image/x-icon">
</head>
<body>
<main>

<ul class="c3">
<li >
      <a   href="index_maisha_yv9k29.php" id="l1">Back</a>
    </li>
  <li >
      CRUISE SHIP
  </li>
  <li><a class="active" href="index_maisha_yv9k29.php">Home</a></li>
  <li><a class="active" href="product.php">Product</a></li>
  <li><a href="card_payment.php">Payment</a></li>
  <li><a href="about.php">About</a></li>
	</ul>	
<div style="height:150px;background-color:#07585d;font-size:10px;color: white;">	
<p class="ppro" >
FREE CANCELLATION BEFORE 1 WEEK!
</p>
<p class="ppro1">
<a href="contact.php">
See returns & cancel policy
</a>
</p>
<p >***We do not charge booking fees, credit card charges or cancellation fees over and above shipping company terms and conditions.We let our experience, knowledge and passion for cruising be your safest, most comforting and reliable choice. </p>
<div class="row">
<form name="myForm" action="payment.php" onsubmit="return validateForm()" method="post">

         
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">
            
            
              
                <label for="state">State</label>
                <select id="state" name="state">
                    <option value="none">Please select</option>
                    <option value="VIC">Budapest</option>
                    <option value="NSW">Pecs</option>
                    <option value="QLD">Debrecen</option>
                    <option value="NT">Szeged</option>
                    <option value="WA">Miskolcs</option>
                 
                </select>
             
              
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
             <label for="productService">Choose a package:</label>
             <select name="productService" id="productService">
			 <option value="none">Please select</option>
             <option value="mainstream">Mainstream $250</option>
             <option value="luxury">Luxury $450</option>
             <option value="premium">Premimum $1000</option>
             
             </select> 
			 
			 </div>
            

            <div class="row">
            <h3>Payment</h3>
            <label for="cards">Accepted Cards</label>
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
           
              
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            
        
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
		
        <input type="submit" value="Continue to checkout" class="button">
		
      </form>
    
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:white"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="product.php">Mainstream</a> <span class="price">$250</span></p>
      <p><a href="product.php">Luxury</a> <span class="price">$450</span></p>
      <p><a href="product.php">Premium</a> <span class="price">$1000</span></p>
      
      <hr>
      <p class="checkout_footer">Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
  <hr>
  <p class="abt"> Find me on social media <br>
<a href="https://www.facebook.com/maisha.maimuna.16/" ><img src="images/fb.png" class="ficon"></a>
<a href="https://www.linkedin.com/in/maishamaimuna2/" ><img src="images/li.png" class="ficon"></a></p>
<div class="footer">

<div>
<img src="images/logorem.png" >
</div>
</div>			
<footer>
<div class="footertext">
<a  href="https://mik.pte.hu/"> University of Pecs; MIK &copy; </a>
<br>
<strong>Mark up by:</strong> <a href="mailto:maisha.maimuna@pte.hu">
Maisha Maimuna</a>



</main>
</body>
</html>