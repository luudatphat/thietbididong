<h3 class="side-heading">Danh mục</h3>
				<div class="list-group categories">
					<?php $sanpham = DB::table('loaisp')->get(); ?>
					@foreach($sanpham as $lsp)
					<a href="{!! url('product',[$lsp->idLoai]) !!}" class="list-group-item">
						<i class="fa fa-chevron-right"></i>
						{{$lsp->TenLoai}}
					</a>
					@endforeach
				</div>
				