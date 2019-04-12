@extends('master') 
@section('content')
		
			
	<div id="main-container" class="container">
	<!-- Breadcrumb Starts -->
		<ol class="breadcrumb">
			<li><a href="index">Trang chủ</a></li>
			Đăng nhập</li>
		</ol>
	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Đăng nhập hoặc tạo tài khoản mới
		</h2>
	<!-- Main Heading Ends -->
	<!-- Login Form Section Starts -->
		<section class="login-area">
			<div class="row">
				<div class="col-sm-6">
				<!-- Login Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Login</h3>
						</div>
						<div class="panel-body">
							<p>
								Vui lòng nhập tài khoản
							</p>
						<!-- Login Form Starts -->
							<form action="{{route('dangnhap')}}" method="post" class="form-inline" role="form">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								@if(Session::has('error'))
								<div class="alert alert-danger">
									{{Session::get('error')}}
								</div>
								@endif
								@if($errors->has('email'))
									<p style="color: red"> {{$errors->first('email')}}</p>
								@endif
								
								@if($errors->has('password'))
									<p style="color: red"> {{$errors->first('password')}}</p>
								@endif
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email</label>
									<input type="text" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email">
									
								</div>

								<div class="form-group">
									<label class="sr-only" for="exampleInputPassword2">Password</label>
									<input type="password" class="form-control" name="password" id="exampleInputPassword2" placeholder="Password">
								
								</div>
								<button type="submit" class="btn btn-black">
									Login
								</button>
							</form>
						<!-- Login Form Ends -->
						</div>
					</div>
				<!-- Login Panel Ends -->
				</div>
				<div class="col-sm-6">
				<!-- Account Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Create new account
							</h3>
						</div>
						<div class="panel-body">
							<p>
								Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website
							</p>
							<a href="register" class="btn btn-black">
								Register
							</a>
						</div>
					</div>
				<!-- Account Panel Ends -->
				</div>
			</div>
		</section>
	<!-- Login Form Section Ends -->
	</div>
@endsection