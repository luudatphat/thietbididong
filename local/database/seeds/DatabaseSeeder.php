<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dienthoai')->insert([
            'idLoai'=>'50',
            'idCL'=>'2',
            'TenDT'=>'Adapter sạc 1A Xmobile TS-C058S Trắng',
            'MoTa'=>'Sử dụng được cho  điện thoại, tablet.',
            'NgayCapNhat'=>'2019-03-30',
            'Gia'=>'55000',
            'GiaKM'=>'100000',
            'urlHinh'=>'adapter-sac-1a-xmobile-ts.jpg',
            'baiviet'=>'Dòng điện 1A phù hợp với điện thoại cấp thấp như dòng nghe gọi, phụ kiện tai nghe...
Kết hợp với các loại dây cáp để sạc cho thiết bị khác.
Tương thích với hầu hết thiết bị hiện nay.
Chất lượng cao, tương đương hàng chính hãng theo máy.',
            'SoLanXem'=>'115',
            'SoLuongTonKho'=>'200',
            'SoLanMua'=>'60',
            'Hot'=>'1'
        ]);
    }
}
