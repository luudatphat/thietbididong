@extends('master') 
@section('content')
		
			
	<div id="main-container" class="container">
	<!-- Breadcrumb Starts -->
		<ol class="breadcrumb">
			<li><a href="index">Trang chủ</a></li>
			<li class="active">Liên hệ	</li>
		</ol>
	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Liên hệ 
		</h2>
	<!-- Main Heading Ends -->
	<!-- Google Map Starts -->
		<div id="map-wrapper">
			<div id="map-block"></div>
		</div>
	<!-- Google Map Ends -->
	<!-- Starts -->
		<div class="row">
		<!-- Contact Details Starts -->
			<div class="col-sm-4">
				<div class="panel panel-smart">
					<div class="panel-heading">
						<h3 class="panel-title">Chi tiết liên hệ</h3>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled contact-details">
							<li class="clearfix">
								<i class="fa fa-home pull-left"></i>
								<span class="pull-left">
									Thế giới điện thoại <br />
									180 Cao Lỗ, Quận 8
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-phone pull-left"></i>
								<span class="pull-left">
									91 99887 74455 <br />
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-envelope-o pull-left"></i>
								<span class="pull-left">
									thegioidienthoai.cf
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		<!-- Contact Details Ends -->
		<!-- Contact Form Starts -->
			<div class="col-sm-8">
				<div class="panel panel-smart">
					<div class="panel-heading">
						<h3 class="panel-title">Gửi thông tin cho chúng tôi</h3>
					</div>
								@if(count($errors)>0)
									@foreach($errors->all() as $err)
									<div class="alert alert-danger">{{$err}}</div>
									@endforeach
								@endif
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="post">
					
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">
									Tên
								</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" id="name" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">
									Email
								</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject" class="col-sm-2 control-label">
									Tiêu đề 
								</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">
									Bình luận
								</label>
								<div class="col-sm-10">
									<textarea name="message" id="message" class="form-control" rows="5" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-black text-uppercase">		Submit
									</button>
								</div>
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
			</div>
		<!-- Contact Form Ends -->
		</div>
	<!-- Ends -->
	</div>
@endsection