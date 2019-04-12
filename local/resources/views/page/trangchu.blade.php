@extends('master') 
@section('content')
		<div class="row">
		<!-- Sidebar Starts -->
			<div class="col-md-3">
			<!-- Categories Links Starts -->
				@include('danhmuc')

			</div>
		<!-- Sidebar Ends -->		
		<!-- Primary Content Starts -->
			<div class="col-md-9">
			<!-- Top Section Starts -->
				<div class="row">
				<!-- Slider Starts -->
					
						<div id="main-carousel" class="carousel slide slider" data-ride="carousel">
						<!-- Wrapper For Slides Starts -->
						
							<div class="carousel-inner">
								<div class="item active" >
									<img src="local/public/imgpro/slide1.png" alt="Slider" class="img-responsive img-center-xs" height="350px"  />
								</div>
								<div class="item">
									<img src="local/public/imgpro/slide2.png" alt="Slider" class="img-responsive img-center-xs" height="350px" />
								</div>
							</div>
					
						<!-- Wrapper For Slides Ends -->
						<!-- Controls Starts -->
							<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						<!-- Controls Ends -->
						</div>	
				
				<!-- Slider Ends -->
				<!-- Banners Starts -->
					
				<!-- Banners Ends -->
				</div>
			<!-- Top Section Ends -->
			<!-- Latest Products Starts -->
				<section class="product-carousel">
				<!-- Heading Starts -->
					<h2 class="product-head">SẢN PHẨM</h2>
				<!-- Heading Ends -->
				<!-- Products Row Starts -->
					<div class="row">
						<div class="col-xs-12">
						<!-- Product Carousel Starts -->
							<div id="owl-product" class="owl-carousel">
							<!-- Product #1 Starts -->
							@foreach($dienthoai as $dt)
								<div class="item">	
									
									<div class="product-col">
										<div class="image">
											<a><img src="local/public/imgpro/{{$dt->urlHinh}}"  alt="" class="img-responsive" height="150px" /></a>
										</div>
										<div class="caption">
											<h4><a href="product">{{$dt->TenDT}}</a></h4>
											<div class="price">
												<span class="price-new">{{number_format($dt->Gia)}}₫</span> 
												<span class="price-old">{{number_format($dt->GiaKM)}}₫</span>
											</div>
											<div class="cart-button button-group">
												<button type="button" class="btn btn-cart">
													<i class="fa fa-shopping-cart"></i> 
													Thêm vào giỏ hàng
												</button>								
											</div>
										</div>
									</div>

								</div>
								@endforeach
							</div>
						<!-- Product Carousel Ends -->
						</div>
					</div>
				<!-- Products Row Ends -->
				</section>
			<!-- Latest Products Ends -->
			<!-- 1 Column Banners Starts -->
				<div class="col1-banners">
					<img src="images/banners/1col-banner1.jpg" alt="banners" class="img-responsive img-center-sm img-center-xs" />
				</div>
			<!-- 1 Column Banners Ends -->
			<!-- Featured Products Starts -->
				<section class="products-list">			
				<!-- Heading Starts -->
					<h2 class="product-head">SẢN PHẨM BÁN CHẠY</h2>
				<!-- Heading Ends -->
				<!-- Products Row Starts -->
					<div class="row">
					<!-- Product #1 Starts -->
					@foreach($dienthoaihot as $dthot)
						<div class="col-md-4 col-sm-6">
							<div class="product-col">
								<div class="image">
									<img src="local/public/imgpro/{{$dthot->urlHinh}}" alt="" class="img-responsive img-center-sm img-center-xs" />
								</div>
								<div class="caption">
									<h4>
										<a href="product-full">{{$dthot->TenDT}}</a>
									</h4>
									<div class="price">
										<span class="price-new" >{{number_format($dthot->Gia)}}₫</span> 
										<span class="price-old">{{number_format($dthot->GiaKM)}}₫</span>
									</div>
									<div class="cart-button button-group">
										<button type="button" class="btn btn-cart">
											<i class="fa fa-shopping-cart"></i> 
											Thêm vào giỏ hàng
										</button>
																		
									</div>
								</div>
							</div>
						</div>
					@endforeach
					</div>
					<div class="row">{{$dienthoaihot->links()}}</div>
				<!-- Products Row Ends -->
				</section>
			<!-- Featured Products Ends -->
			</div>
		<!-- Primary Content Ends -->
		</div>
@endsection