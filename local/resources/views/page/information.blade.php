@extends('master') 
@section('content')
		
	@if(Auth::check())		
	<div id="main-container" class="container">
	<!-- Breadcrumb Starts -->
		<ol class="breadcrumb">
			<li><a href="index">Trang chủ</a></li>
			<li class="active"><!-- <a href="register">email me</a> -->Thông tin tài khoản</li>
		</ol>
	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Thông tin tài khoản <br />
			<span>Tài khoản</span>
		</h2>
	<!-- Main Heading Ends -->
	<!-- Registration Section Starts -->
		<section class="registration-area">
			<div class="row">
				<div class="col-sm-6">
				<!-- Registration Block Starts -->
					<div class="panel panel-smart" >
						<div class="panel-heading">
							<h3 class="panel-title">Điền thông tin</h3>
						</div>
						<div class="panel-body">
						<!-- Registration Form Starts -->
							<form action="{{route('information')}}" method="post" class="form-horizontal" role="form">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
								@if(count($errors)>0)
								
									@foreach($errors->all() as $err)
									<div class="alert alert-danger">{{$err}}</div>
									@endforeach
								
								@endif
								@if(Session::has('thanhcong'))
								<div class="alert alert-success">
									{{Session::get('thanhcong')}}
								</div>
								@endif
							<!-- Personal Information Starts -->
								
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Name :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="{{Auth::user()->name}}" name="name"  id="inputFname"  placeholder="Name">

										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" value="{{Auth::user()->email}}" name="email" id="inputEmail" placeholder="Email" readonly="">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="{{Auth::user()->phone}}" name="phone" id="inputPhone" placeholder="Phone">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label">Địa chỉ :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="{{Auth::user()->diachi}}" name="diachi" id="inputAddress1" placeholder="Địa chỉ">
										</div>
									</div>

								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" class="btn btn-black">
											Sửa
										</button>
									</div>
								</div>
							<!-- Password Area Ends -->
							</form>
						<!-- Registration Form Starts -->
						</div>							
					</div>
				<!-- Registration Block Ends -->
				</div>
			</div>
		</section>
	<!-- Registration Section Ends -->
	</div>
	@else
	Mời bạn hãy :<a href="{{route('dangnhap')}}">đăng nhập </a>
	@endif
@endsection

