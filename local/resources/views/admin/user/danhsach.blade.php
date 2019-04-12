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
					        <a href="danhsach">User</a>
					        <ul class="sub-menu">
					            <li><a href="./danhsach">Danh sách</a></li>
					            <li><a href="./them">Thêm User</a></li>
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
					<h2 class="product-head"> Danh sách User</h2>

	                        <table border="1" width="848" style="text-align: center;" >
	                            <thead   >
	                                <tr style="margin : 10px ;text-align: center;">
	                                    <th style="text-align: center;">ID</th>
	                                    <th style="text-align: center;">Name</th>
	                                    <th style="text-align: center;">Email</th>
	                                    <th style="text-align: center;">Phone</th>
	                                    <th style="text-align: center;">diachi</th>
	                                    <th style="text-align: center;">Edit</th>
	                                    <th style="text-align: center;">Delete</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	@foreach($user as $u)
	                                <tr>
	                                    <td>{{$u->id}}</td>
	                                    <td>{{$u->name}}</td>
	                                    <td>{{$u->email}}</td>
	                                    <td>{{$u->phone}}</td>
	                                    <td>{{$u->diachi}}</td>
	                                    <td><a href="sua/{{$u->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
	                                    <td><a href="xoa/{{$u->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
	                                </tr>

	                                @endforeach
	                            </tbody>
	                        </table>
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