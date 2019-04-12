@extends('master') 
@section('content')
		<div class="row">
		<!-- Sidebar Starts -->
			<div class="col-md-3">
			<!-- Categories Links Starts -->
				@include('danhmuc')
			<!-- Categories Links Ends -->
			<!-- Banner #1 Starts -->
			</div>
			<div class="col-md-9">
				<?php
					$sanpham = DB::table('dienthoai')->get();
				 ?>
				 @foreach($sanpham as $sp)
				 	<div class="col-md-4">
				 		<img width="280" src="images/{!! $sp->urlHinh !!}">
				 	</div>
				 @endforeach
			</div>
		<!-- Sidebar Ends -->		
		<!-- Primary Content Starts -->
		<!-- Primary Content Ends -->
		</div>
@endsection