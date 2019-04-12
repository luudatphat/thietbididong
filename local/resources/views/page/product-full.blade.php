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
				
				 @foreach($sanpham as $sp)
				 	
				 	<div class="col-md-3" style="border: 1px solid; margin: 10px;">
				 		
				 		<div style="text-align: center; font-size: 12px;"> {!! $sp->TenDT !!} </div>
				 		<div style="text-align:center;"><a href="{!! url('product-detail',[$sp->idDT]) !!}"><img src="{!! asset('images/hinhchinh/'.$sp->urlHinh) !!}" style="height: 180px;"> </a></div>
				 		<div class="col-md-6">Giá:{!! $sp->Gia !!}</div>
				 		<div class="col-md-6"><a href="#" style="text-decoration: none; color: red;" >Đặt Mua</a></div>
				 	</div>
				 @endforeach
				
			</div>
@endsection