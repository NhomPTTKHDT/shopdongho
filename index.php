
<?php 

require_once './connection.php'; 
$db = new Database();
$conn = $db->connect();

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>Watch Store</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />


	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/all.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- Font Icon -->
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

	<!-- Main css -->
	<link rel="stylesheet" href="css/style.css">
	<style>
		
	</style>
</head>

<body>
	
	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="top_bar_contact_item">
								<div class="top_bar_icon"><img src="images/phone.png" alt=""></div>0123456789
							</div>
							<div class="top_bar_contact_item">
								<div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a
									href="https://colorlib.com/cdn-cgi/l/email-protection#234542505750424f465063444e424a4f0d404c4e"><span
										class="__cf_email__"
										data-cfemail="34525547404755585147745359555d581a575b59">[email]</span></a>
							</div>
							<div class="top_bar_content ml-auto">
								<div class="top_bar_user" style="margin-top: 15px;">
									<div class="user_icon"><img src="images/user.svg" alt=""></div>
									<button onclick="document.getElementById('id01').style.display='block'"
										style="width:auto;">Đăng Nhập</button>
									<button onclick="document.getElementById('id02').style.display='block'"
										style="width:auto;margin-left: 5px;">Đăng Kí</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Main -->

			<div class="header_main">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-lg-2 col-sm-3 col-3 order-1">
							<div class="logo_container">
								<div class="logo"><a href="index.php">MyStore</a></div>
							</div>
						</div>

						<!-- Search -->
						<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input"
												placeholder="Tìm kiếm sản phẩm...">
											<div class="custom_dropdown">
												<div class="custom_dropdown_list">
													<span class="custom_dropdown_placeholder clc">Tất cả</span>
													<i class="fa fa-chevron-down"></i>
													<ul class="custom_list clc">
														<li><a class="clc" href="#">Tất cả</a></li>
														<?php 
															$sql = "SELECT* FROM loaisanpham";
															$result = mysqli_query($conn,$sql);
															while($row = mysqli_fetch_array($result)){
														?>
														<li><a class="clc" href="#"><?php echo $row['tenLoai']; ?></a></li>
														<?php }?>
													</ul>
												</div>
											</div>
											<button type="submit" class="header_search_button trans_300"
												value="Submit"><img src="images/search.png" alt=""></button>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Wishlist -->
						<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
							<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
								
								<!-- Cart -->
								<div class="cart">
									<div class="cart_container d-flex flex-row align-items-center justify-content-end">
										<div class="cart_icon">
											<img src="images/cart.png" alt="">
											<div class="cart_count"><span>10</span></div>
										</div>
										<div class="cart_content">
											<div class="cart_text"><a href="cart.html">Giỏ hàng</a></div>
											<div class="cart_price">$85</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row">

								<!-- Categories Menu -->

								<div class="cat_menu_container">
									<div
										class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
										<div class="cat_burger"><span></span><span></span><span></span></div>
										<div class="cat_menu_text">Danh mục</div>
									</div>

									<ul class="cat_menu">
									<?php 
										$sql = "SELECT* FROM loaisanpham";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
									?>
										<li><a href="#"><?php echo $row['tenLoai'];?></a></li>
									<?php }?>	
									</ul>
								</div>

								<!-- Main Nav Menu -->

								<div class="main_nav_menu ml-auto">
									<ul class="standard_dropdown main_nav_dropdown">
										<li><a href="index.php">Trang chủ</a></li>
										<li class="hassubs">
											<a href="#">Ưu đãi<i class="fa fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">5 %</a></li>
												<li><a href="#">7 %</a></li>
												<li><a href="#">10 %</a></li>
											</ul>
										</li>
										<li class="hassubs">
											<a href="#">Thương hiệu<i class="fa fa-chevron-down"></i></a>
											<ul>
											<?php 
												$sql = "SELECT* FROM hangsanxuat";
												$result = mysqli_query($conn,$sql);
												while($row = mysqli_fetch_array($result)){
											?>
												<li><a href="#"><?php echo $row['tenThuongHieu'];?></a></li>
											<?php } ?>
											</ul>
										</li>									
										<li><a href="blogs.html">Review</a></li>
										<li><a href="contact.html">Liên hệ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>

			<!-- Menu -->

		</header>

		<!-- Banner -->
		<?php 
			$sql = "SELECT* FROM sanpham sp, chitietgiamgia ctgg
			where sp.idSanPham = 25 and sp.idSanPham = ctgg.idSanPham";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_array($result)){
		?>											
		<div class="banner">
			<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
			<div class="container fill_height">
				<div class="row fill_height">
					<div class="banner_product_image"><img src="<?php echo $row['anh'];?>" alt=""></div>
					<div class="col-lg-5 offset-lg-4 fill_height">
						<div class="banner_content">
							<h1 class="banner_text">new smartwatches</h1>
							<div class="banner_price"><span><?php echo $row['giaTien'];?></span>
							<?php $sale = $row['giaTien']*(100 - $row['phan_tram'])/100;
									echo $sale;?>
							</div>
							<div class="banner_product_name"><?php echo $row['tenSanPham'];?></div>
							<div class="button banner_button"><a href="#">Mua ngay</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
		<!-- Characteristics -->

		<div class="characteristics">
			<div class="container">
				<div class="row">

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/char_1.png" alt=""></div>
							<div class="char_content">
								<div class="char_title">Giao hàng miễn phí</div>
								<div class="char_subtitle">Đơn hàng dưới 200K</div>
							</div>
						</div>
					</div>

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/char_2.png" alt=""></div>
							<div class="char_content">
								<div class="char_title">Miễn phí đổi trả</div>
								<div class="char_subtitle">2 tuần</div>
							</div>
						</div>
					</div>

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/char_4.png" alt=""></div>
							<div class="char_content">
								<div class="char_title">Khuyến mãi sốc</div>
								<div class="char_subtitle">Đơn hàng trên 800K</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Deals of the week -->

		<div class="deals_featured">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Deals -->

						<div class="deals">
							<div class="deals_title">Khuyến mãi cuối tuần</div>
							<div class="deals_slider_container">

								<!-- Deals Slider -->
								<div class="owl-carousel owl-theme deals_slider">

									<!-- Deals Item -->
									<?php 
											$sql = "SELECT* FROM sanpham sp, loaisanpham lsp, chitietgiamgia ctgg
													where (sp.idSanPham = 7 or sp.idSanPham = 8)
														and sp.idLoai = lsp.idLoai and sp.idSanPham = ctgg.idSanPham";
											$result = mysqli_query($conn,$sql);
													
											
											while($row = mysqli_fetch_array($result)){
									?>
									<div class="owl-item deals_item">
										<div class="deals_image"><img src="<?php echo $row['anh'];?>" alt=""></div>
										<div class="deals_content">
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_category"><a href="#"><?php echo $row['tenLoai'];?></a></div>
												<div class="deals_item_price_a ml-auto banner_price"><span><?php echo $row['giaTien'];?></span></div>
											</div>
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_name"><?php echo $row['tenSanPham'];?></div>
												<div class="deals_item_price ml-auto">
													<?php $sale = $row['giaTien']*(100 - $row['phan_tram'])/100;
													echo $sale;?>
												</div>
											</div>
											<div class="available">
												<div class="available_line d-flex flex-row justify-content-start">
													<div class="available_title">Còn lại <span><?php echo $row['soLuong'];?></span></div>
													<div class="sold_title ml-auto">Đã bán <span>18</span></div>
												</div>
												<div class="available_bar"><span style="width:17%"></span></div>
											</div>
											<div
												class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<div class="deals_timer_title">Săn ngay</div>
													<div class="deals_timer_subtitle">Kết thúc sau:</div>
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>Giờ</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>phút</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>giây</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<?php }?>

								</div>

							</div>
							<div class="deals_slider_nav_container">
								<div class="deals_slider_prev deals_slider_nav"><i
										class="fa fa-chevron-left ml-auto"></i></div>
								<div class="deals_slider_next deals_slider_nav"><i
										class="fa fa-chevron-right ml-auto"></i></div>
							</div>				
							
						</div>

						<!-- Featured -->
						<div class="featured">
							<div class="tabbed_container">
								<div class="tabs">
									<ul class="clearfix">
										<li class="active">Hiện có</li>
										<li>Đang giảm giá</li>
									</ul>
									<div class="tabs_line"><span></span></div>
								</div>

								<!-- Product Panel Hot -->
								<div class="product_panel panel active">
									<div class="featured_slider slider">
									<?php 
										$sql = "SELECT* FROM sanpham 
												where idLoai !=7 and idLoai !=8 and  idSanPham not in(
													select idSanPham
													from chitietgiamgia 
												)";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
									?>
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div
												class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div
													class="product_image d-flex flex-column align-items-center justify-content-center">
													<img src="<?php echo $row['anh'];?>" alt=""></div>
												<div class="product_content">
													<div class="product_price discount"><?php echo $row['giaTien'];?></div>
													<div class="product_name">
														<div><a href="product.html"><?php echo $row['tenSanPham'];?></a></div>
													</div>
													<div class="product_extras">	
														<a href="product.html">
															<button class="product_cart_button">Mua ngay</button>
														</a>	
													</div>
												</div>
												<div class="product_fav"><i class="fa fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									<?php }?>

									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>

								<!-- Product Panel  Sale-->

								<div class="product_panel panel">
									<div class="featured_slider slider">
									<?php 
										$sql = "SELECT* FROM sanpham sp, chitietgiamgia ctgg
												where idLoai !=7 and idLoai !=8 and sp.idSanPham = ctgg.idSanPham
												";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
									?>
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div
												class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div
													class="product_image d-flex flex-column align-items-center justify-content-center">
													<img src="<?php echo $row['anh'];?>" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">
														<?php $sale = $row['giaTien']*(100 - $row['phan_tram'])/100;
																echo $sale;?><span><?php echo $row['giaTien'];?></span></div>
													<div class="product_name">
														<div><a href="product.html"><?php echo $row['tenSanPham'];?></a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color"
																style="background:#b19c83">
															<input type="radio" name="product_color"
																style="background:#000000">
															<input type="radio" name="product_color"
																style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"><?php echo "-".$row['phan_tram']."%";?></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									<?php }?>

									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>

								

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		

		<!-- Banner -->

		<div class="banner_2">
			<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
			<div class="banner_2_container">
				<div class="banner_2_dots"></div>
				<!-- Banner 2 Slider -->

				<div class="owl-carousel owl-theme banner_2_slider">

					<!-- Banner 2 Slider Item -->
					<div class="owl-item">
						<div class="banner_2_item">
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col-lg-4 col-md-6 fill_height">
										<div class="banner_2_content">
											<div class="banner_2_title">Shop đồng hồ</div>
											<div class="banner_2_text">Cam kết mang lại những sản phẩm chất lượng
												và trải nghiệm tốt nhất cho người dùng
											</div>
											<div class="rating_r rating_r_4 banner_2_rating">
												<i></i><i></i><i></i><i></i><i></i></div>
										</div>

									</div>
									<div class="col-lg-8 col-md-6 fill_height">
										<div class="banner_2_image_container">
											<div class="banner_2_image"><img src="images/watch/Watch-Buds-PwP-Banner-v2-1440.png" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Banner 2 Slider Item -->
					<div class="owl-item">
						<div class="banner_2_item">
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col-lg-4 col-md-6 fill_height">
										<div class="banner_2_content">
											<div class="banner_2_title">Shop đồng hồ</div>
											<div class="banner_2_text">Cam kết mang lại những sản phẩm chất lượng
												và trải nghiệm tốt nhất cho người dùng
											</div>
											<div class="rating_r rating_r_4 banner_2_rating">
												<i></i><i></i><i></i><i></i><i></i></div>
										</div>

									</div>
									<div class="col-lg-8 col-md-6 fill_height">
										<div class="banner_2_image_container">
											<div class="banner_2_image"><img src="images/watch/Watch-Buds-PwP-Banner-v2-1440.png" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					

				</div>
			</div>
		</div>

		<!-- Hot New Arrivals -->

		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="tabbed_container">
							<div class="tabs clearfix tabs-right">
								<div class="new_arrivals_title">Sản phẩm mới</div>
								<ul class="clearfix">
									<li class="active">Đồng hồ để bàn</li>
									<li>Đồng hồ treo tường</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>
							<div class="row">
								<div class="col-lg-9" style="z-index:1;">

									<!-- Product Panel -->
									<div class="product_panel panel active">
										<div class="arrivals_slider slider">
										<?php
											$sql = "SELECT* FROM sanpham sp
												where idLoai = 8 
												";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
										?>
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div
													class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div
														class="product_image d-flex flex-column align-items-center justify-content-center">
														<img src="<?php echo $row['anh'];?>" alt=""></div>
													<div class="product_content">
														<div class="product_price">
															<?php 
																echo $row['giaTien'];
															?>
														</div>
														<div class="product_name">
															<div><a href="product.html"><?php echo $row['tenSanPham'];?></a></div>
														</div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color"
																	style="background:#b19c83">
																<input type="radio" name="product_color"
																	style="background:#000000">
																<input type="radio" name="product_color"
																	style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fa fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount">-25%</li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
										<?php }?>
										</div>
										<div class="arrivals_slider_dots_cover"></div>
									</div>

									<!-- Product Panel -->
									<div class="product_panel panel">
										<div class="arrivals_slider slider">
										<?php 
											$sql = "SELECT* FROM sanpham sp
											where idLoai = 7 and idSanPham != 24
											";
											$result = mysqli_query($conn,$sql);
											while($row = mysqli_fetch_array($result)){
										?>
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div
													class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div
														class="product_image d-flex flex-column align-items-center justify-content-center">
														<img src="<?php echo $row['anh'];?>" alt=""></div>
													<div class="product_content">
														<div class="product_price"><?php echo $row['giaTien'];?></div>
														<div class="product_name">
															<div><a href="product.html"><?php echo $row['tenSanPham'];?></a></div>
														</div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color"
																	style="background:#b19c83">
																<input type="radio" name="product_color"
																	style="background:#000000">
																<input type="radio" name="product_color"
																	style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fa fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount">-25%</li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
										<?php }?>
										</div>
										<div class="arrivals_slider_dots_cover"></div>
									</div>

									

								</div>
								<?php
											$sql = "SELECT* FROM sanpham sp
												where idSanPham =24
												";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
								?>				
								<div class="col-lg-3">
									<div class="arrivals_single clearfix">
										<div class="d-flex flex-column align-items-center justify-content-center">
											<div class="arrivals_single_image"><img src="<?php echo $row['anh'];?>" alt="">
											</div>
											<div class="arrivals_single_content">
												<div class="arrivals_single_category"><a href="#">HOT</a></div>
												<div class="arrivals_single_name_container clearfix">
													<div class="arrivals_single_name"><a href="#"><?php echo $row['tenSanPham'];?></a>
													</div>
													<div class="arrivals_single_price text-right"><?php echo $row['giaTien'];?></div>
												</div>
												<div class="rating_r rating_r_4 arrivals_single_rating">
													<i></i><i></i><i></i><i></i><i></i></div>
												<form action="#"><button class="arrivals_single_button">Add to
														Cart</button></form>
											</div>
											<div class="arrivals_single_fav product_fav active"><i
													class="fa fa-heart"></i></div>
											<ul class="arrivals_single_marks product_marks">
												<li class="arrivals_single_mark product_mark product_new">new</li>
											</ul>
										</div>
									</div>
								</div>
								<?php }?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Best Sellers -->
		
		<div class="best_sellers">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="tabbed_container">
							<div class="tabs clearfix tabs-right">
								<div class="new_arrivals_title">Sản phẩm bán chạy</div>
								<ul class="clearfix">
									<span class="tab_title">Giá:</span>
									<li class="active">Cao</li>
									<li>Vừa</li>
									<li>Thấp</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<div class="bestsellers_panel panel active">

								<!-- Best Sellers Slider -->

								<div class="bestsellers_slider slider">
								<?php 
										$sql = "SELECT* FROM sanpham sp, chitietgiamgia ctgg, loaisanpham lsp
												where sp.giaTien >= 6000000 and  
												sp.idSanPham = ctgg.idSanPham and sp.idLoai = lsp.idLoai
												";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
								?>		
									<!-- Best Sellers Item -->
									<div class="bestsellers_item discount">
										<div
											class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
											<div class="bestsellers_image"><img src="<?php echo $row['anh'];?>" alt=""></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#"><?php echo $row['tenLoai'];?></a></div>
												<div class="bestsellers_name">
													<a href="product.html">
														<?php echo $row['tenSanPham'];?>
													</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating">
													<i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">
														<?php 
														$sale = $row['giaTien']*(100 - $row['phan_tram'])/100;
														echo $sale;
														?>
													<span>
													<?php echo $row['giaTien'];?>
													</span>
												</div>
											</div>
										</div>
										<div class="bestsellers_fav active"><i class="fa fa-heart"></i></div>
										<ul class="bestsellers_marks">
											<li class="bestsellers_mark bestsellers_discount"><?php echo "-".$row['phan_tram']."%";?></li>
											<li class="bestsellers_mark bestsellers_new">new</li>
										</ul>
									</div>
								<?php }?>
								</div>
							</div>

							<div class="bestsellers_panel panel">
								<!-- Best Sellers Slider -->

								<div class="bestsellers_slider slider">
								<?php 
										$sql = "SELECT* FROM sanpham sp, chitietgiamgia ctgg, loaisanpham lsp
												where sp.giaTien < 6000000 and sp.giaTien > 2000000 and
												sp.idSanPham = ctgg.idSanPham and sp.idLoai = lsp.idLoai
												";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
								?>		
									<!-- Best Sellers Item -->
									<div class="bestsellers_item discount">
										<div
											class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
											<div class="bestsellers_image"><img src="<?php echo $row['anh'];?>" alt=""></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#"><?php echo $row['tenLoai'];?></a></div>
												<div class="bestsellers_name">
													<a href="product.html">
														<?php echo $row['tenSanPham'];?>
													</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating">
													<i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">
														<?php 
														$sale = $row['giaTien']*(100 - $row['phan_tram'])/100;
														echo $sale;
														?>
													<span>
													<?php echo $row['giaTien'];?>
													</span>
												</div>
											</div>
										</div>
										<div class="bestsellers_fav active"><i class="fa fa-heart"></i></div>
										<ul class="bestsellers_marks">
											<li class="bestsellers_mark bestsellers_discount"><?php echo "-".$row['phan_tram']."%";?></li>
											<li class="bestsellers_mark bestsellers_new">new</li>
										</ul>
									</div>
								<?php }?>
								</div>			
							</div>

							<div class="bestsellers_panel panel">
								<!-- Best Sellers Slider -->

								<div class="bestsellers_slider slider">
								<?php 
										$sql = "SELECT* FROM sanpham sp, chitietgiamgia ctgg, loaisanpham lsp
												where sp.giaTien <= 2000000 and 
												 sp.idSanPham = ctgg.idSanPham and sp.idLoai = lsp.idLoai
												";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
								?>		
									<!-- Best Sellers Item -->
									<div class="bestsellers_item discount">
										<div
											class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
											<div class="bestsellers_image"><img src="<?php echo $row['anh'];?>" alt=""></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#"><?php echo $row['tenLoai'];?></a></div>
												<div class="bestsellers_name">
													<a href="product.html">
														<?php echo $row['tenSanPham'];?>
													</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating">
													<i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">
														<?php 
														$sale = $row['giaTien']*(100 - $row['phan_tram'])/100;
														echo $sale;
														?>
													<span>
													<?php echo $row['giaTien'];?>
													</span>
												</div>
											</div>
										</div>
										<div class="bestsellers_fav active"><i class="fa fa-heart"></i></div>
										<ul class="bestsellers_marks">
											<li class="bestsellers_mark bestsellers_discount"><?php echo "-".$row['phan_tram']."%";?></li>
											<li class="bestsellers_mark bestsellers_new">new</li>
										</ul>
									</div>
								<?php }?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<!-- Reviews -->

		<div class="reviews">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="reviews_title_container">
							<h3 class="reviews_title">Sản phẩm có phản hồi tốt từ khách hàng</h3>
							<div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
						</div>

						<div class="reviews_slider_container">

							<!-- Reviews Slider -->
							<div class="owl-carousel owl-theme reviews_slider">
							<?php 
										$sql = "SELECT* FROM sanpham sp
												where idSanPham in (4,15,19,29,26)
												";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
							?>				
								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div>
											<div class="review_image"><img src="<?php echo $row['anh'];?>" alt=""></div>
										</div>
										<div class="review_content">
											<div class="review_name"><?php echo $row['tenSanPham'];?></div>
											<div class="review_rating_container">
												<div class="rating_r rating_r_5 review_rating">
													<i></i><i></i><i></i><i></i><i></i></div>
												<div class="review_time">2 day ago</div>
											</div>
											<div class="review_text">
												<p>Sản phẩm bền, giá cả tốt</p>
											</div>
										</div>
									</div>
								</div>
							<?php }?>				

							</div>
							<div class="reviews_dots"></div>
						</div>
					</div>
				</div>
			</div>
		</div>									


		<!-- Trends -->

		<div class="trends">
			<div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
			<div class="trends_overlay"></div>
			<div class="container">
				<div class="row">

					<!-- Trends Content -->
					<div class="col-lg-3">
						<div class="trends_container">
							<h2 class="trends_title">Trends 2021</h2>
							<div class="trends_text">
								<p>Xu hướng đồng hồ với các tính năng và thiết kế độc đáo, là xu hướng của năm 2021</p>
							</div>
							<div class="trends_slider_nav">
								<div class="trends_prev trends_nav"><i class="fa fa-angle-left ml-auto"></i></div>
								<div class="trends_next trends_nav"><i class="fa fa-angle-right ml-auto"></i></div>
							</div>
						</div>
					</div>

					<!-- Trends Slider -->
					<div class="col-lg-9">
						<div class="trends_slider_container">

							<!-- Trends Slider -->

							<div class="owl-carousel owl-theme trends_slider">
							<?php 
										$sql = "SELECT* FROM sanpham sp, loaisanpham lsp
												where sp.idSanPham in (27,28,29,30) and sp.idLoai = lsp.idLoai
												";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
							?>				
								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="<?php echo $row['anh'];?>" alt=""></div>
										<div class="trends_content">
											<div class="trends_category"><a href="#"><?php echo $row['tenLoai'];?></a></div>
											<div class="trends_info clearfix">
												<div class="trends_name"><a href="product.html">J<?php echo $row['tenSanPham'];?></a></div>
												<div class="trends_price"><?php echo $row['giaTien'];?></div>
											</div>
										</div>
										<ul class="trends_marks">
											<!-- <li class="trends_mark trends_discount">-25%</li> -->
											<li class="trends_mark trends_new">new</li>
										</ul>
										<div class="trends_fav"><i class="fa fa-heart"></i></div>
									</div>
								</div>
							<?php }?>				

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>



		<!-- Brands -->

		<div class="brands">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="brands_slider_container">

							<!-- Brands Slider -->

							<div class="owl-carousel owl-theme brands_slider">
							<?php 
								$sql = "SELECT* FROM hangsanxuat";
								$result = mysqli_query($conn,$sql);
								while($row = mysqli_fetch_array($result)){
							?>			
								<div class="owl-item" style="filter: brightness(0%);">
									<div class="brands_item d-flex flex-column justify-content-center"><img
											src="<?php echo $row['anh'];?>" alt=""></div>
								</div>
							<?php } ?>

							</div>

							<!-- Brands Slider Navigation -->
							<div class="brands_nav brands_prev"><i class="fa fa-chevron-left"></i></div>
							<div class="brands_nav brands_next"><i class="fa fa-chevron-right"></i></div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="id01" class="modal">
			<div class="limiter">
				<div class="container-login100">
					<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="background-color: whitesmoke;">
						<form class="login100-form validate-form animate">
							<span class="login100-form-title p-b-49">
								Login
							</span>

							<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
								<span class="label-input100">Username</span>
								<input class="input100" type="text" name="username" placeholder="Type your username">
								<span class="focus-input100" data-symbol="&#xf206;"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<span class="label-input100">Password</span>
								<input class="input100" type="password" name="pass" placeholder="Type your password">
								<span class="focus-input100" data-symbol="&#xf190;"></span>
							</div>

							<div class="text-right p-t-8 p-b-31">
								<a href="#">
									Forgot password?
								</a>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Login
									</button>
								</div>
							</div>
							<div style="float: right;margin-top: 30px;">
								<button type="button" style="color: red;text-decoration: underline;"
									onclick="document.getElementById('id01').style.display='none'">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="id02" class="modal">

			<div class="main">

				<section class="signup">
					<div class="container2">
						<div class="signup-content">
							<form method="POST" id="signup-form" class="signup-form">
								<h2 class="form-title">Đăng ký tài khoản</h2>
								<div class="form-group">
									<input type="text" class="form-input" name="name" id="name" placeholder="Your Name"
										required />
								</div>
								<div class="form-group">
									<input type="email" class="form-input" name="email" id="email"
										placeholder="Your Email" required />
								</div>
								<div class="form-group">
									<input type="text" class="form-input" name="password" id="password"
										placeholder="Password" required />
									<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<input type="password" class="form-input" name="re_password" id="re_password"
										placeholder="Repeat your password" required />
								</div>
								<div class="form-group">
									<input type="checkbox" name="agree-term" id="agree-term" class="agree-term"
										required />
									<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree
										all statements in <a href="#" class="term-service">Terms of service</a></label>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" id="submit" class="form-submit"
										value="Sign up" />
								</div>
								<div style="float: right;margin-bottom: 20px;">
									<button type="button" style="color: red;text-decoration: underline;"
										onclick="document.getElementById('id02').style.display='none'">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</section>

			</div>
		</div>
		<!-- Newsletter -->

		<div class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col">
						<div
							class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
							<div class="newsletter_title_container">
								<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
								<div class="newsletter_title">Đăng kí thành viên</div>
								<div class="newsletter_text">
									<p>nhận ngay nhiều ưu đãi và quà tặng hấp dẫn</p>
								</div>
							</div>
							<div class="newsletter_content clearfix">
								<form action="#" class="newsletter_form">
									<input type="email" class="newsletter_input" required="required"
										placeholder="Mail của bạn">
									<button class="newsletter_button">Subscribe</button>
								</form>
								<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 footer_col">
						<div class="footer_column footer_contact">
							<div class="logo_container">
								<div class="logo"><a href="#">HPTStore</a></div>
							</div>
							<div class="footer_title">Nhận hỗ trợ 24/7</div>
							<div class="footer_phone">Liên hệ: 0123456789</div>
							<div class="footer_contact_text">
								<p>An Dương Vương</p>
								<p>Q5, TP HCM</p>
							</div>
							<div class="footer_social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-2 offset-lg-2">
						<div class="footer_column">
							<div class="footer_title">GIỚI THIỆU</div>
							<ul class="footer_list">
								<li><a href="#">Thông tin cửa hàng</a></li>
								<li><a href="#">Thông tin tuyển dụng</a></li>
								<li><a href="#">Chính sách bảo mật & thanh toán</a></li>
								<li><a href="#">Chính sách bảo hành & sửa chửa</a></li>
							</ul>
							
						</div>
					</div>

					<div class="col-lg-2">
						<div class="footer_column">
							<div class="footer_title">HỖ TRỢ KHÁCH HÀNG</div>
							<ul class="footer_list">
								<li><a href="#">Các câu hỏi thường gặp</a></li>
								<li><a href="#">Gửi yêu cầu trợ giúp</a></li>
								<li><a href="#">Hướng dẫn đặt hàng</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="footer_column">
							<div class="footer_title">HỢP TÁC VÀ LIÊN KẾT</div>
							<ul class="footer_list">
								<li><a href="#">Quy tắc hoạt động</a></li>
								<li><a href="#">Đối tác kinh doanh</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</footer>

		<!-- Copyright -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">

						<div
							class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
							<div class="logos ml-sm-auto">
								<ul class="logos_list">
									<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
									<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
									<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
									<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/slick-1.8.0/slick.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/custom.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script src="js/main2.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>


</html>
