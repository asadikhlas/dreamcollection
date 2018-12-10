<?php 
include 'conn.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						All Kinds of Fancy and Cottons Suits Stich & Unstitch
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Noman Ali
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							0314-2304355
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

						<li  class="active-menu">
								<a href="#" >Products</a>
								<ul class="sub-menu">
									<li><a href="userallproduct.php">All Products</a></li>
									<li><a href="userwomen.php">Women's</a></li>
									<li><a href="usermen.php">Men's</a></li>
                                    <li><a href="userkid.php">Kid's</a></li>
								</ul>
                                  <span class="arrow-main-menu">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</span>
							</li>
							

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	

				
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			
	<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						All Kinds of Fancy and Cottons Suits Stich & Unstitch
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Noman Ali
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
                                0314-2304355
						</a>
					</div>
				</li>
			</ul>
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					
				</li>

				<li>
					<a href="#">Products</a>
					<ul class="sub-menu-m">
						<li><a href="userallproduct.php">All Products</a></li>
						<li><a href="userwomen.php">Women's</a></li>
						<li><a href="usermen.php">Men's</a></li>
                        <li><a href="userkid.php">kid's</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

    </header>


<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">

					<h1><b>Women's Fabrics</b></h1>

					

				</div>

				<div class="flex-w flex-c-m m-tb-10">

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<form action="" method="get">
						<div class="hidden-submit"><input type="submit" name="submitBtn" tabindex="-1"/></div>
						<i class="zmdi zmdi-search" style="display: inline-block;"></i>
					<input class="mtext-107 cl2 size-114 plh2 p-r-300" name="inputTxt" style="display: inline-block;" type="text" name="search-product" placeholder="Search">
					</form>
					</div>	
				</div>

            </div>
<div class="row isotope-grid">
            <?php
                    $conn = connect::connected();
                    if(!(isset($_GET['inputTxt']))){
                    	$_GET['inputTxt'] = "";
					}
					$input = $_GET['inputTxt'];

                    $q = "SELECT DISTINCT (p.postId),p.postName, p.postType, p.postPrice, p.postDate, i.image from images i RIGHT JOIN postad p ON i.postId = p.postId WHERE p.postCategory = 'women' AND p.postName Like '%$input%' GROUP BY p.postId";
        	$res = $conn->query($q); 
       		while($data = $res->fetch_assoc()){
            //connect::debug($res);
           
			//$conn = connect::connected();
				echo "<div class='col-sm-6 col-md-8 col-lg-3 p-b-35 isotope-item men' >";
					echo "<div class='block2'>";
						echo "<div class='block2-pic hov-img0'>";
							echo "<img src='postimg/$data[image]' alt='IMG-PRODUCT' height='350px' width='100%'>";

							echo "<a href='user_product_detail.php?id=$data[postId]' class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal'>
								More Details
							</a>";
						echo "</div>";

						echo "<div class='block2-txt flex-w flex-t p-t-14'>";
							echo "<div class='block2-txt-child1 flex-col-l '>";
								echo "<p class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
									$data[postName]
								</p>";

								echo "<span class='stext-105 cl3'>
									RS: $data[postPrice]
								</span>";
							echo "</div>";
                echo "<div class='block2-txt-child2 flex-r p-t-3'>";
                            echo "<p class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
									$data[postType]
								</p>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
       
                                      }

?>

            </div>

        </div>
    </div>
    
	<?php include "includes/footer.php"; ?>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>