

<nav id="main-menu" class="navbar" role="navigation">
		<div class="container">
		<!-- Nav Header Starts -->
			<div class="navbar-header">
				<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
			</div>
		<!-- Nav Header Ends -->
		<!-- Navbar Cat collapse Starts -->
			<?php $chungloai = DB::table('chungloai')->get(); ?>
			
			<div class="collapse navbar-collapse navbar-cat-collapse">
				@foreach($chungloai as $cl)
				<ul class="nav navbar-nav">
					<li><a href="{{route('category-list',$cl->idCL)}}">{{$cl->TenCL}}</a></li>
				</ul>
				@endforeach
				<ul class="nav navbar-nav">
					<li><a href="contact">LIÊN HỆ</a></li>
				</ul>
			</div>
			
		<!-- Navbar Cat collapse Ends -->
		</div>
	</nav>
