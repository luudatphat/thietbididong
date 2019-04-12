<header id="header-area">
	<!-- Nested Container Starts -->
		<div class="contair Top Starts -->
			<div cner">
		<!-- Headelass="header-top text-uppercase">
				<div class="row">
				<!-- Header Links Starts -->
					<div class="col-sm-5 col-xs-12">
						<div class="header-links">
							<ul class="nav navbar-nav">
								<li>
									<a href="index">
										<i class="fa fa-home hidden-lg hidden-md" title="Home"></i>
										<span class="hidden-sm hidden-xs">
											Trang chủ
										</span>
									</a>
								</li>
								@if(Auth::check())
									
									<li><a href="{{route('information')}}" >Chào bạn: {{Auth::user()->name}}</a></li>
									<li><a href="{{route('dangxuat')}}">Đăng xuất </a></li>
								@else 
									<li><a href="register">Đăng ký</a></li>
									<li><a href="login">Đăng nhập</a></li>
								@endif				
							</ul>
						</div>
					</div>
				<!-- Header Links Ends -->
					<div class="col-sm-3 col-xs-12 hidden-md hidden-sm hidden-xs text-center msg">
						<span >THEGIOIDIENTHOAI</span>
					</div>
				<!-- Currency & Languages Starts -->
					
				<!-- Currency & Languages Ends -->
				</div>
			</div>
		<!-- Header Top Ends -->
		<!-- Main Header Starts -->
			<div class="main-header">
				<div class="row">
				<!-- Logo Starts -->
					<div class="col-md-6 col-xs-12">
						<div id="logo">
							<a href="indexadmin"><img src="./images/logo.png" title="Mobile Shoppe" alt="Mobile Shoppe" class="img-responsive" /></a>
						</div>
					</div>
				<!-- Logo Starts -->
				<!-- Search Starts -->
					<div class="col-md-3 col-xs-12">
						<div id="search">
							<div class="input-group">
								<form role="search" method="get" id="searchform" action="{{route('search')}}">
							  <input type="text" class="form-control input-lg" value="" name="key" placeholder="Search" style="width: 80% !important">
								<button class="btn btn-lg" type="submit" id="searchsm" >
									<i class="fa fa-search"></i>
								</button>
								</form>
							</div>
						</div>	
					</div>
				<!-- Search Ends -->				
				<!-- Shopping Cart Starts -->
					<div class="col-md-3 col-xs-12">
						<div id="cart" class="btn-group btn-block">
							<button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
								<i class="fa fa-shopping-cart"></i>
								<span class="hidden-md">Giỏ hàng:</span> 
								<span id="cart-total">0 item(s) - $340.00</span>
								<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right">
								<li>
									<table class="table hcart">
										<tr>
											<td class="text-center">
												<a href="product">
													<img src="images/product-images/hcart-thumb1.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
												</a>
											</td>
											<td class="text-left">
												<a href="product-full">
													Seeds
												</a>
											</td>
											<td class="text-right">x 1</td>
											<td class="text-right">$120.68</td>
											<td class="text-center">
												<a href="#">
													<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td class="text-center">
												<a href="product">
													<img src="images/product-images/hcart-thumb2.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
												</a>
											</td>
											<td class="text-left">
												<a href="product-full">
													Organic
												</a>
											</td>
											<td class="text-right">x 2</td>
											<td class="text-right">$240.00</td>
											<td class="text-center">
												<a href="#">
													<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
									</table>
								</li>
								<li>
									<table class="table table-bordered total">
										<tbody>
											<tr>
												<td class="text-right"><strong>Sub-Total</strong></td>
												<td class="text-left">$1,101.00</td>
											</tr>
											<tr>
												<td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
												<td class="text-left">$4.00</td>
											</tr>
											<tr>
												<td class="text-right"><strong>VAT (17.5%)</strong></td>
												<td class="text-left">$192.68</td>
											</tr>
											<tr>
												<td class="text-right"><strong>Total</strong></td>
												<td class="text-left">$1,297.68</td>
											</tr>
										</tbody>
									</table>
									<p class="text-right btn-block1">
										<a href="cart">
											View Cart
										</a>
										<a href="#">
											Checkout
										</a>
									</p>
								</li>									
							</ul>
						</div>
					</div>
				<!-- Shopping Cart Ends -->

				</div>

			</div>
		<!-- Main Header Ends -->
		</div>
	<!-- Nested Container Ends -->
	</header>