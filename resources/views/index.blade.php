<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from themezhub.net/kumo-demo-2/kumo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2024 20:50:07 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Jayga eCommerce </title>
		 
        <!-- Custom CSS -->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
		
    </head>
	
    <body>
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light dark-text">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								Jayga Ecommerce
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li>
									<a href="#" onclick="openSearch()">
										<i class="lni lni-search-alt"></i>
									</a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#login">
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="#" onclick="openWishlist()">
										<i class="lni lni-heart"></i><span class="dn-counter">2</span>
									</a>
								</li>
								<li>
									<a href="#" onclick="openCart()">
										<i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
									</a>
								</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li><a href="#">Home</a>
									
								</li>
								
								<li><a href="javascript:void(0);">Shop</a>
									
								</li>
								
								<li><a href="javascript:void(0);">Product</a>
									
								</li>
								
								<li><a href="javascript:void(0);">Pages</a>
									
								</li>
								
								<li><a href="{{route('addProduct')}}">Add Product</a></li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<li>
									<a href="#" onclick="openSearch()">
										<i class="lni lni-search-alt"></i>
									</a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#login">
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="#" onclick="openWishlist()">
										<i class="lni lni-heart"></i><span class="dn-counter">2</span>
									</a>
								</li>
								<li>
									<a href="#" onclick="openCart()">
										<i class="lni lni-shopping-basket"></i><span class="dn-counter theme-bg">3</span>
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ======================= Category Style 1 ======================== -->
			<section class="p-0">
				<div class="container-fluid p-0">
					<div class="row no-gutters">
						@foreach($category as $cat)
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<a href="#" class="card card-overflow card-scale no-radius mb-0">
							<div class="bg-image" style="background-image: url('{{ asset('img/a-1.png') }}');" data-overlay="2"></div>
								<div class="ct_body">
									<div class="ct_body_caption">	
										<h1 class="mb-0 ft-bold text-light">{{$cat->name ?? N/A}}</h1>
									</div>
									<div class="ct_footer">
										<span class="btn btn-white stretched-link">Shop {{$cat->name ?? N/A}} <i class="lni lni-arrow-right"></i>
										</span>
									</div>
								</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</section>
			<!-- ======================= Category Style 1 ======================== -->
			
			<!-- ======================= Product List ======================== -->
			<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h3 class="ft-bold pt-3">Our Trending Products</h3>
							</div>
						</div>
					</div>
					
					<!-- row -->
					<div class="row align-items-center rows-products">
						@foreach ($data as $item)
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset($item->image)}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
									<div class="text-left">
										<div class="text-center">
											<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">{{$item->name ?? N/A}}</a></h5>
											<div class="elis_rty"><span class="ft-bold fs-md text-dark">{{$item->price ?? N/A}}</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Product View Modal -->
						<div class="modal fade lg-modal" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickviewmodal" aria-hidden="true">
							<div class="modal-dialog modal-xl login-pop-form" role="document">
								<div class="modal-content" id="quickviewmodal">
									<div class="modal-headers">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span class="ti-close"></span>
										</button>
									</div>
								
									<div class="modal-body">
										<div class="quick_view_wrap">
								
											<div class="quick_view_thmb">
												<div class="quick_view_slide">
													<div class="single_view_slide"><img src="{{asset($item->image)}}" class="img-fluid" alt="" /></div>
												
												</div>
											</div>
											
											<div class="quick_view_capt">
												<div class="prd_details">
													
													<div class="prt_01 mb-1"><span class="text-light bg-info rounded px-2 py-1">{{$item->category->name ?? N/A}}</span></div>
													<div class="prt_02 mb-2">
														<h2 class="ft-bold mb-1">{{$item->name}}</h2>
														<div class="text-left">
															<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star"></i>
																<span class="small">(412 Reviews)</span>
															</div>
															<div class="elis_rty"><span class="ft-medium text-muted line-through fs-md mr-2">${{$item->price ?? N/A}}</span><span class="ft-bold theme-cl fs-lg mr-2">${{$item->price ?? N/A}}</span><span class="ft-regular text-danger bg-light-danger py-1 px-2 fs-sm">Out of Stock</span></div>
														</div>
													</div>
													
													<div class="prt_03 mb-3">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
													</div>
													
													<div class="prt_04 mb-4">
														
														@foreach($item->attributes as $attributes)
														<p class="d-flex align-items-center mb-0 text-dark ft-medium">{{$attributes->name ?? N/A}}:</p>
														
														<div class="text-left pb-0 pt-2">
															<div class="form-check size-option form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="size" id="28" checked="">
																@foreach($item->attributeValues as $value)
																	@if($value->attribute_id === $attributes->id)
																		<label class="form-option-label" for="28">{{ $value->value ?? N/A }}</label>
																	@endif
																@endforeach
															</div>
														</div>
														@endforeach
													</div>
													
													<div class="prt_05 mb-4">
														<div class="form-row mb-7">
															<div class="col-12 col-lg-auto">
																<!-- Quantity -->
																<select class="mb-2 custom-select">
																<option value="1" selected="">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																</select>
															</div>
															<div class="col-12 col-lg">
																<!-- Submit -->
																<button type="submit" class="btn btn-block custom-height bg-dark mb-2">
																	<i class="lni lni-shopping-basket mr-2"></i>Add to Cart 
																</button>
															</div>
															<div class="col-12 col-lg-auto">
																<!-- Wishlist -->
																<button class="btn custom-height btn-default btn-block mb-2 text-dark" data-toggle="button">
																	<i class="lni lni-heart mr-2"></i>Wishlist
																</button>
															</div>
													</div>
													</div>
													
													<div class="prt_06">
														<p class="mb-0 d-flex align-items-center">
														<span class="mr-4">Share:</span>
														<a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
															<i class="fab fa-twitter position-absolute"></i>
														</a>
														<a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
															<i class="fab fa-facebook-f position-absolute"></i>
														</a>
														<a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
															<i class="fab fa-pinterest-p position-absolute"></i>
														</a>
														</p>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Modal -->
						@endforeach

					</div>
					<!-- row -->
					
				</div>
			</section>
			<!-- ======================= Product List ======================== -->
			
			<!-- ======================= Customer Review ======================== -->
			<section class="gray">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h3 class="ft-bold pt-3">Client Reviews</h3>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
							<div class="reviews-slide px-3">
								
								<!-- single review -->
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="assets/img/team-1.jpg" class="img-fluid circle" alt="" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0">Mark Jevenue</h4>
											<span class="fs-sm">CEO of Addle</span>
										</div>
									</div>
								</div>
								
								<!-- single review -->
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="assets/img/team-2.jpg" class="img-fluid circle" alt="" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0">Henna Bajaj</h4>
											<span class="fs-sm">Aqua Founder</span>
										</div>
									</div>
								</div>
								
								<!-- single review -->
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="assets/img/team-3.jpg" class="img-fluid circle" alt="" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0">John Cenna</h4>
											<span class="fs-sm">CEO of Plike</span>
										</div>
									</div>
								</div>
								
								<!-- single review -->
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="assets/img/team-4.jpg" class="img-fluid circle" alt="" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0">Madhu Sharma</h4>
											<span class="fs-sm">Team Manager</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ======================= Customer Review ======================== -->
			
			<!-- ======================= Blog Start ============================ -->
			<section class="space min">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h3 class="ft-bold pt-3">New Updates</h3>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="_blog_wrap">
								<div class="_blog_thumb mb-2">
									<a href="blog-detail.html" class="d-block"><img src="assets/img/bl-1.png" class="img-fluid rounded" alt="" /></a>
								</div>
								<div class="_blog_caption">
									<span class="text-muted">26 Jan 2021</span>
									<h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
									<a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="_blog_wrap">
								<div class="_blog_thumb mb-2">
									<a href="blog-detail.html" class="d-block"><img src="assets/img/bl-2.png" class="img-fluid rounded" alt="" /></a>
								</div>
								<div class="_blog_caption">
									<span class="text-muted">17 July 2021</span>
									<h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
									<a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="_blog_wrap">
								<div class="_blog_thumb mb-2">
									<a href="blog-detail.html" class="d-block"><img src="assets/img/bl-3.png" class="img-fluid rounded" alt="" /></a>
								</div>
								<div class="_blog_caption">
									<span class="text-muted">10 Aug 2021</span>
									<h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
									<a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ======================= Blog Start ============================ -->
			
			<!-- ======================= Customer Features ======================== -->
			<section class="px-0 py-3 br-top">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shopping-basket"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Free Shipping</h5>
									<span class="text-muted">Capped at $10 per order</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="far fa-credit-card"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Secure Payments</h5>
									<span class="text-muted">Up to 6 months installments</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shield-alt"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">15-Days Returns</h5>
									<span class="text-muted">Shop with fully confidence</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-headphones-alt"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">24x7 Fully Support</h5>
									<span class="text-muted">Get friendly support</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= Customer Features ======================== -->
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<h2 style="color :aliceblue">Jayga Ecommercce</h2>
									
									<div class="address mt-3">
										3298 Grant Street Longview, TX<br>United Kingdom 75601	
									</div>
									<div class="address mt-3">
										1-202-555-0106<br>help@shopper.com
									</div>
									<div class="address mt-3">
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Supports</h4>
									<ul class="footer-menu">
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">About Page</a></li>
										<li><a href="#">Size Guide</a></li>
										<li><a href="#">Shipping & Returns</a></li>
										<li><a href="#">FAQ's Page</a></li>
										<li><a href="#">Privacy</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Shop</h4>
									<ul class="footer-menu">
										<li><a href="#">Men's Shopping</a></li>
										<li><a href="#">Women's Shopping</a></li>
										<li><a href="#">Kids's Shopping</a></li>
										<li><a href="#">Furniture</a></li>
										<li><a href="#">Discounts</a></li>
									</ul>
								</div>
							</div>
					
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Company</h4>
									<ul class="footer-menu">
										<li><a href="#">About</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Affiliate</a></li>
										<li><a href="#">Login</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Subscribe</h4>
									<p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
									<div class="foot-news-last">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Email Address">
											<div class="input-group-append">
												<button type="button" class="input-group-text b-0 text-light"><i class="lni lni-arrow-right"></i></button>
											</div>
										</div>
									</div>
									<div class="address mt-3">
										<h5 class="fs-sm text-light">Secure Payments</h5>
										<div class="scr_payment"><img src="assets/img/card.png" class="img-fluid" alt="" /></div>
									</div>
								</div>
							</div>
								
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2024 Jayga Ecmmerce. Designd By Sabah Raad.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Product View Modal -->
			<div class="modal fade lg-modal" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickviewmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="quickviewmodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body">
							<div class="quick_view_wrap">
					
								<div class="quick_view_thmb">
									<div class="quick_view_slide">
										<div class="single_view_slide"><img src="assets/img/product/1.jpg" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="assets/img/product/2.jpg" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="assets/img/product/3.jpg" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="assets/img/product/4.jpg" class="img-fluid" alt="" /></div>
									</div>
								</div>
								
								<div class="quick_view_capt">
									<div class="prd_details">
										
										<div class="prt_01 mb-1"><span class="text-light bg-info rounded px-2 py-1">Dresses</span></div>
										<div class="prt_02 mb-2">
											<h2 class="ft-bold mb-1">Women Striped Shirt Dress</h2>
											<div class="text-left">
												<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="small">(412 Reviews)</span>
												</div>
												<div class="elis_rty"><span class="ft-medium text-muted line-through fs-md mr-2">$199</span><span class="ft-bold theme-cl fs-lg mr-2">$110</span><span class="ft-regular text-danger bg-light-danger py-1 px-2 fs-sm">Out of Stock</span></div>
											</div>
										</div>
										
										<div class="prt_03 mb-3">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
										</div>
										
										<div class="prt_04 mb-2">
											<p class="d-flex align-items-center mb-0 text-dark ft-medium">Color:</p>
											<div class="text-left">
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="white8">
													<label class="form-option-label rounded-circle" for="white8"><span class="form-option-color rounded-circle blc7"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="blue8">
													<label class="form-option-label rounded-circle" for="blue8"><span class="form-option-color rounded-circle blc2"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="yellow8">
													<label class="form-option-label rounded-circle" for="yellow8"><span class="form-option-color rounded-circle blc5"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="pink8">
													<label class="form-option-label rounded-circle" for="pink8"><span class="form-option-color rounded-circle blc3"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="red">
													<label class="form-option-label rounded-circle" for="red"><span class="form-option-color rounded-circle blc4"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="green">
													<label class="form-option-label rounded-circle" for="green"><span class="form-option-color rounded-circle blc6"></span></label>
												</div>
											</div>
										</div>
										
										<div class="prt_04 mb-4">
											<p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
											<div class="text-left pb-0 pt-2">
												<div class="form-check size-option form-option form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="28" checked="">
													<label class="form-option-label" for="28">28</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="30">
													<label class="form-option-label" for="30">30</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="32">
													<label class="form-option-label" for="32">32</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="34">
													<label class="form-option-label" for="34">34</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="36">
													<label class="form-option-label" for="36">36</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="38">
													<label class="form-option-label" for="38">38</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="40">
													<label class="form-option-label" for="40">40</label>
												</div>
											</div>
										</div>
										
										<div class="prt_05 mb-4">
											<div class="form-row mb-7">
												<div class="col-12 col-lg-auto">
													<!-- Quantity -->
													<select class="mb-2 custom-select">
													  <option value="1" selected="">1</option>
													  <option value="2">2</option>
													  <option value="3">3</option>
													  <option value="4">4</option>
													  <option value="5">5</option>
													</select>
												</div>
												<div class="col-12 col-lg">
													<!-- Submit -->
													<button type="submit" class="btn btn-block custom-height bg-dark mb-2">
														<i class="lni lni-shopping-basket mr-2"></i>Add to Cart 
													</button>
												</div>
												<div class="col-12 col-lg-auto">
													<!-- Wishlist -->
													<button class="btn custom-height btn-default btn-block mb-2 text-dark" data-toggle="button">
														<i class="lni lni-heart mr-2"></i>Wishlist
													</button>
												</div>
										  </div>
										</div>
										
										<div class="prt_06">
											<p class="mb-0 d-flex align-items-center">
											  <span class="mr-4">Share:</span>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
												<i class="fab fa-twitter position-absolute"></i>
											  </a>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
												<i class="fab fa-facebook-f position-absolute"></i>
											  </a>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
												<i class="fab fa-pinterest-p position-absolute"></i>
											  </a>
											</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			
			<!-- Search -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Search">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Search Products</h4>
						<button onclick="closeSearch()" class="close_slide"><i class="ti-close"></i></button>
					</div>
						
					<div class="cart_action px-3 py-4">
						<form class="form m-0 p-0">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Product Keyword.." />
							</div>
							
							<div class="form-group">
								<select class="custom-select">
								  <option value="1" selected="">Choose Category</option>
								  <option value="2">Men's Store</option>
								  <option value="3">Women's Store</option>
								  <option value="4">Kid's Fashion</option>
								  <option value="5">Inner Wear</option>
								</select>
							</div>
							
							<div class="form-group mb-0">
								<button type="button" class="btn d-block full-width btn-dark">Search Product</button>
							</div>
						</form>
					</div>
					
					<div class="d-flex align-items-center justify-content-center br-top br-bottom py-2 px-3">
						<h4 class="cart_heading fs-md mb-0">Hot Categories</h4>
					</div>
						
					<div class="cart_action px-3 py-3">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/tshirt.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">T-Shirts</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/pant.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Pants</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/fashion.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Women's</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/sneakers.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Shoes</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/television.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/accessories.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Wishlist -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
						<button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
					</div>
					<div class="right-ch-sideBar">
						
						<div class="cart_select_items py-2">
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
						</div>
						
						<div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
							<h6 class="mb-0">Subtotal</h6>
							<h3 class="mb-0 ft-medium">$417</h3>
						</div>
						
						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark">Move To Cart</button>
							</div>
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- Cart -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
						<button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
					</div>
					<div class="right-ch-sideBar">
						
						<div class="cart_select_items py-2">
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
						</div>
						
						<div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
							<h6 class="mb-0">Subtotal</h6>
							<h3 class="mb-0 ft-medium">$1023</h3>
						</div>
						
						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark">Checkout Now</button>
							</div>
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/ion.rangeSlider.min.js')}}"></script>
		<script src="{{asset('js/slick.js')}}"></script>
		<script src="{{asset('s/slider-bg.js')}}j"></script>
		<script src="{{asset('js/lightbox.js')}}"></script> 
		<script src="{{asset('js/smoothproducts.js')}}"></script>
		<script src="{{asset('js/snackbar.min.js')}}"></script>
		<script src="{{asset('js/jQuery.style.switcher.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

		<script>
			function openWishlist() {
				document.getElementById("Wishlist").style.display = "block";
			}
			function closeWishlist() {
				document.getElementById("Wishlist").style.display = "none";
			}
		</script>
		
		<script>
			function openCart() {
				document.getElementById("Cart").style.display = "block";
			}
			function closeCart() {
				document.getElementById("Cart").style.display = "none";
			}
		</script>

		<script>
			function openSearch() {
				document.getElementById("Search").style.display = "block";
			}
			function closeSearch() {
				document.getElementById("Search").style.display = "none";
			}
		</script>		

	</body>

<!-- Mirrored from themezhub.net/kumo-demo-2/kumo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2024 20:51:19 GMT -->
</html>