@extends('master') 
@section('content')
		
			
			<div class="col-md-9">
			<!-- Breadcrumb Starts -->
				<ol class="breadcrumb">
					<li><a href="index">Trang chủ</a></li>
					<li class="active">Sản phẩm tìm kiếm</li>
				</ol>
				<div class="row">
				<!-- Product #1 Starts -->
				@foreach($dt_theoloai as $dtcl)
					<div class="col-xs-12">
						<div class="product-col list clearfix">
							<div class="image">
								<img src="http://localhost/xdpmweb/local/public/imgpro/{{$dtcl->urlHinh}}" alt="" class="img-responsive" style="height: 150px"  />
							</div> 
							<div class="caption">
								<h4><a href="product-full">{{$dtcl->TenDT}}</a></h4>
								<div class="description">
									{{$dtcl->MoTa}}
								</div>
								<div class="price">
									<span class="price-new">{{number_format($dtcl->Gia)}}₫</span> 
									<span class="price-old">{{number_format($dtcl->GiaKM)}}₫</span>
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
			
			<!-- Product List Display Ends -->
			<!-- Pagination & Results Starts -->
			<!-- Pagination & Results Ends -->
			</div>
@endsection