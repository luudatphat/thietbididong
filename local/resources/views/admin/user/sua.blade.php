@extends('admin.master') 
@section('content')
<div class="row">
		<!-- Sidebar Starts -->
			<div class="col-md-3">
			<!-- Categories Links Starts -->
			<h3 class="side-heading">Danh Mục</h3>
				<div class="list-group categories">
					<ul class="nav">
					    <li>
					        <a href="#">User</a>
					        <ul class="sub-menu">
					            <li><a href="http://localhost:70/xdpmweb/admin/user/danhsach">Danh sách</a></li>
					            <li><a href="http://localhost:70/xdpmweb/admin/user/them">Thêm User</a></li>
					        </ul>
					    </li>
					</ul>
					
					
					

				
				</div>

			</div>
		<!-- Sidebar Ends -->		
		<!-- Primary Content Starts -->
			<div class="col-md-9">
			<!-- Top Section Starts -->
				
			<!-- Top Section Ends -->
			<!-- Latest Products Starts -->
				<section class="product-carousel">
				<!-- Heading Starts -->
					<h2 class="product-head"> Thêm User</h2>

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
							<form action="http://localhost:70/xdpmweb/admin/user/sua/{{$user->id}}" method="post" class="form-horizontal" role="form">
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
											<input type="text" class="form-control" value="{{$user->name}}" name="name"              id="inputFname"  placeholder="Name">

										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" value="{{$user->email}}" name="email" id="inputEmail" placeholder="Email" readonly="">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="{{$user->phone}}" name="phone" id="inputPhone" placeholder="Phone">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label">Địa chỉ :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="{{$user->diachi}}" name="diachi" id="inputAddress1" placeholder="Địa chỉ">
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
					</div>
				<!-- Registration Block Ends -->
				</div>
			</div>
		</section>
				<!-- Heading Ends -->
				<!-- Products Row Starts -->
					</section>

					</div>
				<!-- Products Row Ends -->
				</section>
			<!-- Latest Products Ends -->
			<!-- 1 Column Banners Starts -->

			<!-- 1 Column Banners Ends -->
			<!-- Featured Products Starts -->
			
			<!-- Featured Products Ends -->
			</div>
		<!-- Primary Content Ends -->
		</div>
@endsection