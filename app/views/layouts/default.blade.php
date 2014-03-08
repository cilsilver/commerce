<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title> Auxano Stores | {{ $title }} </title>
<link href="image/favicon.png" rel="icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Auxano Stores, Nigeria Shopping mall for gadgets, electronics, smartphones">
<meta name="author" content=" Softbox Technologies Limited">
<!-- CSS Start-->
{{HTML::Style('css/stylesheet.css') }}

{{HTML::Style('css/font-awesome.min.css') }}
{{HTML::Style('css/slideshow.css') }}
{{HTML::Style('css/colorbox.html') }}
{{HTML::Style('css/carousel.css') }}
{{HTML::Style('css/custom.css') }}
<!-- CSS End-->

<!-- JS Start-->
{{HTML::script('js/jquery-1.7.1.min.js')}}
{{HTML::script('js/vendor/modernizr.js')}}
{{HTML::script('js/jquery.nivo.slider.pack.js')}}
{{HTML::script('js/jquery.jcarousel.min.js')}}
{{HTML::script('js/colorbox/jquery.colorbox-min.js')}}
{{HTML::script('js/tabs.js')}}
{{HTML::script('js/jquery.easing-1.3.min.js')}}
{{HTML::script('js/cloud_zoom.js')}}
{{HTML::script('js/custom.js')}}
{{HTML::script('js/jquery.dcjqaccordion.js')}}
<!-- JS End-->

</head>
<body>
<div class="main-wrapper">
  <!-- Header Parts Start-->
  <div id="header">
    <!-- Top Right part Links-->
    <div id="account"><span class="alogin"><a href="#"><i class="fa fa-lock fa-lg"></i>  Returning Customers</a> </span> <span class="blogin button"> <a href="#"> <i class="fa fa-th-list fa-lg"></i>  New Customers</a> </span>  <span> <a href="#" class="button" style="border-radius:5px;"><i class="fa fa-group fa-lg"></i>  Customer Helpdesk </a> </span> </div>
    <div id="logo"><a href="index-2.html"><img src="image/logo.png" title="ecommerce Html Template" alt="ecommerce Html Template" /></a></div>
    <div id="search">
      <div class="button-search"></div>
      <input type="text" value="" placeholder="" id="filter_name" name="search">
    </div>
    <!--Mini Cart Start-->
    <div id="cart">
      <div class="heading">
        <h4><img width="32" height="32" alt="small-cart-icon" src="image/cart-bg.png"></h4>
        <a><span id="cart-total">0 item(s) - N0.00</span></a></div>
      <div class="content">
        <div class="mini-cart-info">
          <table>
            <tbody>
              <tr>
                <td class="image"><a href="product.html"><img title="Chair Swing" alt="Chair Swing" width="43" height="43" src="image/product/samsung_tab_1-60x60.jpg"></a></td>
                <td class="name"><a href="product.html">Chair Swing</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$236.99</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
              <tr>
                <td class="image"><a href="product.html"><img title="Eyewear Eyeglasses" alt="Eyewear Eyeglasses" width="43" height="43" src="image/product/apple_cinema_30-60x60.jpg"></a></td>
                <td class="name"><a href="product.html">Eyewear Eyeglasses</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$119.50</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
              <tr>
                <td class="image"><a href="product.html"><img title="Nail Polish" alt="Nail Polish" width="43" height="43" src="image/product/hp_1-60x60.jpg"></a></td>
                <td class="name"><a href="product.html">Nail Polish</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$119.50</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mini-cart-total">
          <table>
            <tbody>
              <tr>
                <td class="right"><b>Sub-Total:</b></td>
                <td class="right">$399.99</td>
              </tr>
              
              <tr>
                <td class="right"><b>VAT (17.5%):</b></td>
                <td class="right">$70.00</td>
              </tr>
              <tr>
                <td class="right"><b>Total:</b></td>
                <td class="right">$475.99</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="checkout"><a href="cart.html" class="button">View Cart</a> &nbsp; <a href="checkout.html" class="button">Checkout</a></div>
      </div>
    </div>
    <!--Mini Cart End-->
  </div>
  <!--Top Navigation Start-->
  <div id="menu"><span>Menu</span>
    <ul>
      <li class="home"><a  title="Home" href="index-2.html"><span>Home</span></a></li>
      <li><a href="#">Electronics</a>
        <div>
          <ul>
            <li><a href="#">Cameras</a></li>
            <li><a href="#">Gadgets</a></li>
            <li><a href="#">Home Applicances</a></li>
          </ul>
        </div>
      </li>
      <li><a href="#">Accessories</a> </li>
      <li><a href="#">Computers</a>
        <div>
          <ul>
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Desktops</a></li>
            <li><a href="#">Tablets</a></li>
            <li><a href="#">Servers</a></li>
            <li><a href="#">Softwares</a></li>

          </ul>

        </div>
      </li>
      <li><a href="#">Mobile phones</a>
        <div>
          <ul>
            <li><a href="#"><strong> BLACKBERRY </strong><hr></a></li>
            <li><a href="#">Blackberry 10</a></li>
            <li><a href="#">Blackberry 7</a></li>
            <li><a href="#">Blackberry 6</a></li>
            <li><a href="#">Blackberry 5</a></li>
            <li><a href="#">Blackberry 4 & others</a></li>

          </ul>

          <ul>
            <li><a href="#"><strong> APPLE </strong><hr></a></li>
            <li><a href="#">Fashion Books</a></li>
            <li><a href="#">Games Books</a></li>
            <li><a href="#">God Books</a></li>
            <li><a href="#">Journal Book</a></li>
          </ul>
          <ul>
            <li><a href="category.html"><strong> WINDOWS PHONE</strong><hr></a></li>
            <li><a href="category.html">Magic Books</a></li>
            <li><a href="category.html">Management Books</a></li>
            <li><a href="category.html">Student Books</a></li>
            <li><a href="category.html">Teachers Books</a></li>
          </ul>
          <ul>
            <li><a href="category.html"><strong> iOS PHONE </strong><hr></a></li>
            <li><a href="category.html">Travel Books</a></li>
            <li><a href="category.html">Video Books</a></li>
          </ul>
        </div>
      </li>
      
    </ul>
  </div>
  <!--Top Navigation Start-->
  <div id="container">
    <!--Left Part-->
    <div id="column-left">
      <!--Categories Part Start-->
      <div class="box">
        <div class="box-heading">ALL Categories</div>
        <div class="box-content box-category">
          <ul id="custom_accordion">
            <li class="category25"><a class="cuuchild " href="category.html">Electronics</a> <span class="down"></span>
              <ul>
                <li class="category30"><a class="nochild " href="category.html"></a></li>
                <li class="category29"><a class="nochild " href="category.html">Phones</a></li>
                <li class="category28"><a class="cuuchild " href="category.html">Tablets</a> <span class="down"></span>
                  <ul>
                    <li class="category35"><a class="nochild " href="category.html">test 1</a></li>
                    <li class="category36"><a class="nochild " href="category.html">test 2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="category57"><a class="nochild " href="category.html">Accessories</a></li>
            <li class="category18"><a class="cuuchild " href="category.html">Shoes</a> <span class="down"></span>
              <ul>
                <li class="category46"><a class="nochild " href="category.html">Casual shoes</a></li>
                <li class="category45"><a class="nochild " href="category.html">Fancy shoes</a></li>
                <li><a class="nochild " href="category.html">Sports shoes</a></li>
              </ul>
            </li>
            <li><a class="cuuchild " href="category.html">Clothing</a> <span class="down"></span>
              <ul>
                <li><a class="nochild " href="category.html">Women Clothing</a></li>
                <li><a class="nochild " href="category.html">Men Clothing</a></li>
              </ul>
            </li>
            <li><a class="nochild " href="category.html">Furniture</a></li>
            <li><a class="nochild " href="category.html">Beauty &amp; Health Care</a></li>
            <li><a class="cuuchild " href="category.html">Books</a> <span class="down"></span>
              <ul>
                <li><a class="nochild " href="category.html">Audio Books</a></li>
                <li><a class="nochild " href="category.html">Comedy Book</a></li>
                <li><a class="nochild " href="category.html">Comics Books</a></li>
                <li><a class="nochild " href="category.html">Computer Book</a></li>
                <li><a class="nochild " href="category.html">Cookies Books</a></li>
                <li><a class="nochild " href="category.html">English Books</a></li>
                <li><a class="cuuchild " href="category.html">Fashion Books</a> <span class="down"></span>
                  <ul>
                    <li><a class="nochild " href="category.html">test 25</a></li>
                  </ul>
                </li>
                <li><a class="nochild " href="category.html">Games Books</a></li>
                <li><a class="nochild " href="category.html">God Books</a></li>
                <li><a class="nochild " href="category.html">Journal Book</a></li>
                <li><a class="nochild " href="category.html">Knowledge Books</a></li>
                <li><a class="nochild " href="category.html">Magic Books</a></li>
                <li><a class="nochild " href="category.html">Management Books</a></li>
                <li><a class="nochild " href="category.html">Student Books</a></li>
                <li><a class="nochild " href="category.html">Teachers Books</a></li>
                <li><a class="nochild " href="category.html">Toys Books</a></li>
                <li><a class="nochild " href="category.html">Travel Books</a></li>
                <li><a class="nochild " href="category.html">Video Books</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!--Categories Part End-->
      <!--Latest Product Start-->
      <div class="box">
        <div class="box-heading">Latest</div>
        <div class="box-content">
          <div class="box-product">
            <div>
              <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-60x60.jpg" alt="Chair Swing" /></a></div>
              <div class="name"><a href="product.html">Chair Swing</a></div>
              <div class="price"> N236.99 </div>
              <div class="rating"><img src="image/stars-3.png" alt="Based on 1 reviews." /></div>
            </div>
            <div>
              <div class="image"><a href="product.html"><img src="image/product/ipod_classic_1-60x60.jpg" alt="iPad Classic" /></a></div>
              <div class="name"><a href="product.html">iPad Classic</a></div>
              <div class="price"> N119.50 </div>
              <div class="rating"><img src="image/stars-0.png" alt="Based on 0 reviews." /></div>
            </div>
            <div>
              <div class="image"><a href="product.html"><img src="image/product/hp_1-60x60.jpg" alt="Casual Saddle Shoes" /></a></div>
              <div class="name"><a href="product.html">Casual Saddle Shoes</a></div>
              <div class="price"> N119.50 </div>
              <div class="rating"><img src="image/stars-3.png" alt="Based on 3 reviews." /></div>
            </div>
            <div>
              <div class="image"><a href="product.html"><img src="image/product/sony_vaio_1-60x60.jpg" alt="Silver Cuff Bracelet" /></a></div>
              <div class="name"><a href="product.html">Silver Cuff Bracelet</a></div>
              <div class="price"> N1,177.00 </div>
              <div class="rating"><img src="image/stars-0.png" alt="Based on 0 reviews." /></div>
            </div>
            <div>
              <div class="image"><a href="product.html"><img src="image/product/macbook_pro_1-60x60.jpg" alt="MacBook Pro" /></a></div>
              <div class="name"><a href="product.html">MacBook Pro</a></div>
              <div class="price"> N2,000.00 </div>
              <div class="rating"><img src="image/stars-5.png" alt="Based on 5 reviews." /></div>
            </div>
          </div>
        </div>
      </div>
      <!--Latest Product End-->
      <!--Specials Product Start-->
      <div class="box">
        <div class="box-heading">Specials</div>
        <div class="box-content">
          <div class="box-product">
            <div>
              <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-60x60.jpg" alt="Apple Tablet Retina" /></a></div>
              <div class="name"><a href="product.html">Apple Tablet Retina</a></div>
              <div class="price"> <span class="price-old">N119.50</span> <span class="price-new">N107.75</span> </div>
              <div class="rating"><img src="image/stars-0.png" alt="Based on 0 reviews." /></div>
              <div class="cart">
                <input type="button" value="Add to Cart" onClick="addToCart('42');" class="button" />
              </div>
            </div>
            <div>
              <div class="image"><a href="product.html"><img src="image/product/canon_eos_5d_1-60x60.jpg" alt="Canon Digital Camera" /></a></div>
              <div class="name"><a href="product.html">Canon Digital Camera</a></div>
              <div class="price"> <span class="price-old">N119.50</span> <span class="price-new">N96.00</span> </div>
              <div class="rating"><img src="stars-0.html" alt="Based on 0 reviews." /></div>
              <div class="cart">
                <input type="button" value="Add to Cart" onClick="addToCart('30');" class="button" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Specials Product End-->
    </div>
    <!--Left End-->
    <!--Middle Part Start-->
    <div id="content">
      <p class="welcome"></p>
	

      <!--Featured Product Part Start-->
      <div class="box">
        <section> 
				@if(Session::has('message'))
					<p class="alert"> {{ Session::get('message')}} </p>
				@endif
        </section>
	
		@yield('content', 'All Contents is not available')


      </div>
      <!--Featured Product Part End-->
    </div>
    <!--Middle Part End-->
    <div class="clear"></div>
    <div class="social-part">
     
     Shipping Box | Newsletter | Call to order
      
    </div>
  </div>
</div>
<!--Footer Part Start-->
<div id="footer">
  <div class="column">
    <h3>Information</h3>
    <ul>
      <li><a href="about-us.html">About Us</a></li>
      <li><a href="about-us.html">Delivery Information</a></li>
      <li><a href="about-us.html">Privacy Policy</a></li>
      <li><a href="elements.html">Elements</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>Customer Service</h3>
    <ul>
      <li><a href="contact-us.html">Contact Us</a></li>
      <li><a href="#">Returns</a></li>
      <li><a href="sitemap.html">Site Map</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>Extras</h3>
    <ul>
      <li><a href="#">Brands</a></li>
      <li><a href="#">Gift Vouchers</a></li>
      <li><a href="#">Affiliates</a></li>
      <li><a href="#">Specials</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>My Account</h3>
    <ul>
      <li><a href="#">My Account</a></li>
      <li><a href="#">Order History</a></li>
      <li><a href="#">Wish List</a></li>
      <li><a href="#">Newsletter</a></li>
    </ul>
  </div>
  <div class="contact">
    <ul>
      <li class="address">3/5 Samuel Onafunwa Close, River Valley Estate, Ojodu</li>
     
      <li class="email"><a href="mailto:info@demo.com">info@demo.com</a></li>
      <li class="mobile">191 191 91 19</li>
    </ul>
  </div>
  <div class="social"> <a href="http://facebook.com/160281810726316" target="_blank"><img src="image/facebook.png" alt="Facebook" title="Facebook"></a> <a href="https://twitter.com/#!/#" target="_blank"><img src="image/twitter.png" alt="Twitter" title="Twitter"></a>  </div>
  <div class="clear"></div>
  <div id="powered">Auxano Solutions 2013 &nbsp;|&nbsp; Copyright 2013
     </div>
  </div>
</div>
<!--Footer Part End-->
</body>
</html>