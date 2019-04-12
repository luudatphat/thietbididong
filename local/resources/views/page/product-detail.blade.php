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
				 	
				 	<div class="col-md-12" style="font-size: 25px;text-align: center;">{!! $sp->TenDT !!}</div>
				 	<div class="col-md-12" style="text-align: center;"><img src="{!! asset('images/hinhchinh/'.$sp->urlHinh) !!}"></div>
				 	<div class="col-md-12">{!! $sp->MoTa !!}</div>
				 	<div class="col-md-12" style="text-align: center; font-size: 20px; color: red;">Giá chỉ {!! $sp->Gia !!}</div>
				 	<div class="col-md-12" style="text-align: center;"><a href="#" style="text-decoration: none; color: red;font-size: 20px;">Đặt Mua Ngay</a></div>
				 	<div class="col-md-12">{!! $sp->baiviet !!}</div>
				 	
				 @endforeach
				 <?php $thuoctinh = DB::table('thuoctinh')->select('idDT','tinh_nang_noi_bat')->where('idDT',$sp->idDT)->get(); ?>
				 @foreach($thuoctinh as $tt)
				 <div class="col-md-12">{!! $tt->tinh_nang_noi_bat !!}</div>
				@endforeach
					
			</div>
@endsection