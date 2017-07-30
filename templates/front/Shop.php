<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Shop :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/mtpee.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="current"><a href="shop.html">Shop</a></li>
						    	<li><a href="team.html">Team</a></li>
						    	<li><a href="experiance.html">Events</a></li>
						    	<li><a href="experiance.html">Experiance</a></li>
						    	<li><a href="shop.html">Company</a></li>
								<li><a href="contact.html">Contact</a></li>
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				  <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Check out</a></div>
							 <div class="login_button"><a href="login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		       <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
<!-- product-list -->
<div class="main">
<div class="content-top">
  <h2>snowboards</h2>
  <p>hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
  <div class="close_but"><i class="close1"> </i></div>
    <ul id="flexiselDemo3">
    <li><img src="images/b1.jpg" /></li>
    <li><img src="images/b2.jpg" /></li>
    <li><img src="images/b3.jpg" /></li>
    <li><img src="images/b4.jpg" /></li>
    <li><img src="images/b5.jpg" /></li>
    <li><img src="images/b6.jpg" /></li>
    <li><img src="images/b7.jpg" /></li>
    <li><img src="images/b8.jpg" /></li>
    <li><img src="images/b9.jpg" /></li>
    <li><img src="images/b10.jpg" /></li>
    <li><img src="images/b11.jpg" /></li>
    <li><img src="images/b12.jpg" /></li>
  </ul>
<h3>SnowBoard Extreme Series</h3>
  <script type="text/javascript">
$(window).load(function() {
  $("#flexiselDemo3").flexisel({
    visibleItems: 5,
    animationSpeed: 1000,
    autoPlay: true,
    autoPlaySpeed: 3000,
    pauseOnHover: true,
    enableResponsiveBreakpoints: true,
      responsiveBreakpoints: {
        portrait: {
          changePoint:480,
          visibleItems: 1
        },
        landscape: {
          changePoint:640,
          visibleItems: 2
        },
        tablet: {
          changePoint:768,
          visibleItems: 3
        }
      }
    });

});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</div>
</div>
<!--product-list-->
    <div class="container">
      <?php
      include("../../libraries/connect.php");
// BƯỚC 1: TÌM TỔNG SỐ RECORDS
$result = mysqli_query($conn, 'select count(id) as total from product');
$row = mysqli_fetch_assoc($result);
$total_records = $row['total'];

// BƯỚC 2: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 5;

// BƯỚC 3: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
 // Tìm Start
$start = ($current_page - 1) * $limit;
      ?>
         <?php include("products-list.php"); ?>
      </div>
<!-- -->
      <div class="features">
    		<div class="container">
    			<h3 class="m_3">ELLE</h3>
    			<div class="close_but"><i class="close1"> </i></div>
    			  <div class="row">
    				<div class="col-md-3 top_box">
    				  <div class="view view-ninth"><a href="http://www.elle.com/beauty/hair/g28726/spring-2017-hair-trends/">
                        <img src="images/p1.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                          <div class="content">
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                          </div>
                       </a> </div
                      </div>
                      <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                      <p class="m_5">claritatem insitam</p>
                    </div>
                    <div class="col-md-3 top_box">
    					<div class="view view-ninth"><a href="http://www.elle.com/fashion/street-style/news/g27906/paris-fashion-week-street-style-2016/?">
                        <img src="images/p2.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                          <div class="content">
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                          </div>
                        </a> </div>
                       <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                       <p class="m_5">claritatem insitam</p>
    				</div>
    				<div class="col-md-3 top_box">
    					<div class="view view-ninth"><a href="http://www.elle.com/fashion/trend-reports/g28728/spring-2017-fashion-trends/?slide=8">
                        <img src="images/p3.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                          <div class="content">
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                          </div>
                        </a> </div>
                       <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                       <p class="m_5">claritatem insitam</p>
    				</div>
    				<div class="col-md-3 top_box1">
    					<div class="view view-ninth"><a href="http://www.elle.com/fashion/trend-reports/g29541/the-best-looks-from-london-fashion-week-fall-2017/">
                        <img src="images/p4.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                          <div class="content">
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                          </div>
                         </a> </div>
                       <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                       <p class="m_5">claritatem insitam</p>
    				</div>
    			</div>
    		 </div>
    	    </div>
<!--trang-->
      <center><div style="word-spacing: 5px" ><strong>Page:</strong>
            <?php
// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
if ($current_page > 1 && $total_page > 1){
    echo '<a href="Shop.php?page='.($current_page-1).'">Prev</a> | ';
}
// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++){
// Nếu là trang hiện tại thì hiển thị thẻ span
// ngược lại hiển thị thẻ a
    if ($i == $current_page){
        echo '<span>'.$i.'</span> | ';
    }
    else{
        echo '<a href="Shop.php?page='.$i.'">'.$i.'</a> | ';
    }
}
 // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
if ($current_page < $total_page && $total_page > 1){
    echo '<a href="Shop.php?page='.($current_page+1).'">Next</a> | ';
            } ?>
        </div>
  <!-- footer-->
  <div class="clear"></div>
	  <div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Products</h4>
							<li><a href="#">Mens</a></li>
							<li><a href="#">Womens</a></li>
							<li><a href="#">Youth</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>About</h4>
							<li><a href="#">Careers and internships</a></li>
							<li><a href="#">Sponserships</a></li>
							<li><a href="#">team</a></li>
							<li><a href="#">Catalog Request/Download</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Customer Support</h4>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Shipping and Order Tracking</a></li>
							<li><a href="#">Easy Returns</a></li>
							<li><a href="#">Warranty</a></li>
							<li><a href="#">Replacement Binding Parts</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							<ul class="social">
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>
							  <li class="pinterest"><a href="#"><span> </span></a></li>
							  <li class="youtube"><a href="#"><span> </span></a></li>
						    </ul>

						</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			           <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Change Region</span></a></dt>
				        <dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>
   				</div>
			</div>
		</div>
</body>
</html>
