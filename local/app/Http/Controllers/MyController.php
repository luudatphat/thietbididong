<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use Auth;
use App\Loaisp;
use DB;
use App\Dienthoai;
use App\Comment;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MyController extends Controller
{

    public function getIndex()
    {

        $data['dienthoai'] = Dienthoai::all();
        $data['dienthoaihot'] = Dienthoai::where('Hot',1)->paginate(3);
        $data['loaisp'] = Loaisp::all();

    	return view('page.trangchu',$data);
    }


    /*admin*/  
    public function getAdindex()
    {
        return view('admin.index');
    }
    public function getAdlogin()
    {
        return view('admin.login');
    }
    public function postAdlogin(Request $request)
    {
        $rules=[
            'email'=>'required|email',
            'password'=>'required|min:3'    
        ];
        $messages=[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'password.required'=>'Vui lòng nhập password',
            'password.min'=>'Password ít nhất 3 ký tự'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                return redirect()->intended('adindex');
            }else{
                return redirect()->back()->with('error','Email hoặc password chưa đúng');
            }
        }
    }
    public function getAdlogout()
    {
        Auth::logout();
        return redirect()->route('adlogin');
    }
    public function getAdproduct()
    {
        $dienthoai = DB::table('dienthoai')->join('loaisp','dienthoai.idLoai','=','loaisp.idLoai')->get();
        return view('admin.product',compact('dienthoai'));
    }
    public function postAdaddproduct(Request $request)
    {
         $rules=[        
            'img'=>'image'
        ];
        $messages=[    
                'image'=>'Định dạng không cho phép'
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
             $filename = $request->img->getClientOriginalName();
            $dienthoai=[         
            'idLoai' => $request->idl,
            'idCL'=>$request->idcl,
            'TenDT'=>$request->name,
            'MoTa'=>$request->mota,
            'NgayCapNhat'=>$request->ncn,
            'Gia'=>$request->price,
            // 'GiaKM'=>$request->priceKM,
           'baiviet'=>$request->bv,
            'SoLanXem'=>$request->slx,
            'SoLuongTonKho'=>$request->sltk,
            'SoLanMua'=>$request->slm,
            'AnHien'=>$request->ah,
            'Hot'=>$request->hot,
            'urlHinh'=>$request->img->move('images/',$filename),
            // $request->img->move('images/',$filename)          
            ];
            DB::table('dienthoai')->insert($dienthoai);
            return redirect()->back()->with('thanhcong','thêm thanh cong');
           }
    }

    public function getaddadmin()
    {
        return view('admin.addadmin');
    }

    public function postaddadmin(Request $request)
    {

       $rules=[
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:20', 
            'name'=>'required',
            'phone'=>'required|numeric',
            'diachi'=>'required'
        ];
        $messages=[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 3 ký tự',
            'password.max'=>'Mật khẩu chỉ tối đa 20 ký tự',
            'name.required'=>'Vui lòng nhập họ tên',
            'phone.required'=>'Vui lòng nhập số điện thoại',
            'phone.numeric'=>'Số điện thoại phải là số',
            'diachi.required'=>'Vui lòng nhập địa chỉ'
           
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
        
        $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'diachi'=>$request->diachi,
        'password'=>bcrypt($request->password)]); 
        $user->save();


         return redirect()->back()->with('thanhcong','thêm thanh cong');    
       }
       
    }
    
    // public function getAdeditcategory()
    // {
    //     return view('admin.editcategory');
    // }
    public function getAdedit()
    {
        return view('admin.edit');
    }
    public function getAdeditproduct()
    {
        return view('admin.editproduct');
    }
    public function getAdaddproduct()
    {
        return view('admin.addproduct');
    }
    public function getAdadd()
    {
        return view('admin.add');
    }


    /*page*/
    public function getAbout()
    {
    	return view('page.about');
    }

    public function getCart()
    {
    	return view('page.cart');
    }


    public function getCategorylist($cloai)
    {
        $data['dt_theoloai'] = Dienthoai::where('idCL',$cloai)->paginate(8);
    	return view('page.category-list',$data);
    }
    public function getCompare()
    {
    	return view('page.compare');
    }
    public function getContact()
    {

        return view('page.contact');
    }
    public function postContact(Request $request)
    {
        $rules=[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ];
        $messages=[
            'name.required'=>'Vui lòng nhập tên',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'subject.required'=>'Vui lòng nhập tiêu đề',
            'message.required'=>'Vui lòng nhập nội dung'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());}
        else{
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->tieude = $request->subject;
        $comment->binhluan = $request->message;
        $comment->save();
         return redirect()->back();
     }
    }
    
    public function getLogin()
    {
    	return view('page.login');
    }

    public function postLogin(Request $request)
    {
        $rules=[
            'email'=>'required|email',
            'password'=>'required|min:3'    
        ];
        $messages=[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'password.required'=>'Vui lòng nhập password',
            'password.min'=>'Password ít nhất 3 ký tự'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                return redirect()->intended('/');
            }else{
                return redirect()->back()->with('error','Email hoặc password chưa đúng');
            }
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }


    public function getProductfull()
    {
    	return view('page.product-full');
    }
    public function getProduct()
    {
         $loaisp = Loaisp::all(); 
    	return view('page.product',compact('loaisp'));
    }
    public function getRegister()
    {
    	return view('page.register');
    }
   public function postRegister(Request $request)
    {

       $rules=[
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:20', 
            'name'=>'required',
            'phone'=>'required|numeric',
            'diachi'=>'required'
        ];
        $messages=[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 3 ký tự',
            'password.max'=>'Mật khẩu chỉ tối đa 20 ký tự',
            'name.required'=>'Vui lòng nhập họ tên',
            'phone.required'=>'Vui lòng nhập số điện thoại',
            'phone.numeric'=>'Số điện thoại phải là số',
            'diachi.required'=>'Vui lòng nhập địa chỉ'
           
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
        
        $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'diachi'=>$request->diachi,
        'password'=>bcrypt($request->password)
                ]);         
         return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
       }
       
    }

    public function getTypography()
    {
        return view('page.typography');
    }

    
     public function getInformation()
    {
        return view('page.information');
         // return redirect()->route('trang-chu');
    }
   public function postInformation(Request $request)
    {
         $rules=[        
            'name'=>'required',  
            'phone'=>'required|numeric',     
        ];
        $messages=[    
            'name.required'=>'Vui lòng nhập họ tên',  
            'phone.numeric'=>'Số điện thoại phải là số',
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
              
               $email= Auth::user()->email;
            $array = [ 'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'diachi'=>$request->diachi];
                    DB::table('users') ->where('email', $email)->update($array);
                     return redirect()->back()->with('thanhcong','update thanh cong');



           }

       }
     public function getSearch(Request $request){
        $dt_theoloai = Dienthoai::where('TenDT','like','%'.$request->key.'%')->get();
        return view('page.search', compact('dt_theoloai'));
    }
    public function getAdcategory()
    {
         $data['Loai_sp'] = DB::table('loaisp')->get();
        return view('admin.category',$data);
    }
    public function postAdcategory(Request $request)
    {
         $rules=[  
            // 'email'=>'required|email|unique:users,email',      
            'name'=>'required|unique:loaisp,TenLoai',       
        ];
        $messages=[    
            'name.required'=>'Vui lòng không để trống',   
            'name.unique'=>'Đã có người sử dụng',     
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
              
        //            $Loaisp = new Loaisp;
        // $Loaisp->name = $request->name;
      
        // $comment->save();
        //  return redirect()->back();
        //     $LoaiSP = DB::table('loaisp')->get();

        // foreach ($LoaiSP as $key => $value) {
        //    echo  $value->TenLoai;
        //    echo "<br>";
        // }

        // $a = $request->name;
        // echo $a;
        //  $Loai_SP = DB::table('loaisp')->where('TenLoai','Nokia')->get();
        // foreach ($Loai_SP as $key => $value) {
        //    echo  $value;
        //    echo "<br>";
        // }
        // dd($a);
        // die();

            $array = [
               'idCL'=>1, 

             'TenLoai'=>$request->name,
               // 'TenLoai' => 'unique:loaisp,$request->name'

              ];
                    DB::table('loaisp')->insert($array);
                return redirect()->back()->with('thanhcongcong','them thanh cong');

            
        }
            // dd("heloo");



           

    }
     public function getAduser()
    {
        $data['userad'] = DB::table('users')->get();
        // $data['dienthoai'] = DB::table('dienthoai')->join('loaisp','dienthoai.idLoai','=','loaisp.idLoai')->get();
        return view('admin.useradmin',$data);
    }
     public function getChangeaduser($id)
    {
      
        $user = User::findOrFail($id)->toArray();
        return view('admin.editaduser',['user'=>$user]);
    }

public function postChangeaduser(request $request,$id)
    {

          $rules=[        
            'name'=>'required',       
        ];
        $messages=[    
            'name.required'=>'Vui lòng nhập họ tên',        
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
              
             
            $array = [ 'name'=>$request->TenLoai,];
                    DB::table('users') ->where('id', $id)->update($array);
                     return redirect()->back()->with('thanhcong','update thanh cong');
            // echo "string";



           }
    }

    public function getAdeditcategory($id)
    {
            // $flight = App\Flight::where('active', 1)->first();

                  $data =  DB::table('loaisp') ->where('idLoai', $id)->get();
         // $data = DB::select('select * from `loaisp` where `loaisp`.`idLoai` = $id ');
         // $data = Loaisp::findOrFail($id)->toArray();
        return view('admin.editcategory',['data'=>$data]);
    }
      public function postAdeditcategory($id,Request $request)
    {
     

       
         

        $rules=[        


            'TenLoai'=>'required|unique:loaisp,TenLoai',     
        ];
        $messages=[    
            'TenLoai.required'=>'Vui lòng nhập không để trống',
            'TenLoai.unique' => 'Đã tồn tại tên loại này',       
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
              
             
            $array = [ 'TenLoai'=>$request->TenLoai,];
                    DB::table('loaisp') ->where('idLoai', $id)->update($array);
                     return redirect()->back()->with('thanhcong','update thanh cong');
            // echo "string";



           }

       }

      
         public function getAddeletecategory($id)
         {
              DB::table('loaisp') ->where('idLoai', $id)->delete();
               return redirect()->back()->with('delete_category','xoa thanh cong');
         }

        public function getadmin()
    {
        return view('admin.trangchu');
    }

         public function getdanhsach()
    {
        $user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }

    public function getthem()
    {
        return view('admin.user.them');
    }


    public function postthem(Request $request)
    {

       $rules=[
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:20', 
            'name'=>'required',
            'phone'=>'required|numeric',
            'diachi'=>'required'
        ];
        $messages=[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 3 ký tự',
            'password.max'=>'Mật khẩu chỉ tối đa 20 ký tự',
            'name.required'=>'Vui lòng nhập họ tên',
            'phone.required'=>'Vui lòng nhập số điện thoại',
            'phone.numeric'=>'Số điện thoại phải là số',
            'diachi.required'=>'Vui lòng nhập địa chỉ'
           
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
        
        $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'diachi'=>$request->diachi,
        'password'=>bcrypt($request->password)]); 
        $user->save();


         return redirect('admin/user/them')->with('thanhcong','Tạo tài khoản thành công');
       }
       
    }

    public function getsua($id)
    {

            $user = User::find($id); 
            return view('admin.user.sua',compact('user'));
    }

    public function postsua(request $request,$id)
    {

            $rules=[        
            'name'=>'required',       
        ];
        $messages=[    
            'name.required'=>'Vui lòng nhập họ tên',        
        ];
        $validator =  Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
              
               $user = User::find($id);
               $user->name = $request->name;
                $user->email = $request->email;
                 $user->phone = $request->phone;
                  $user->diachi = $request->diachi;
                $user->save();
                     return redirect('admin/user/sua/'.$id)->with('thanhcong','update thanh cong');



           
        }
    }

public function getdeluser($id)
    {
                DB::table('users') ->where('id', $id)->delete();
               return redirect()->back()->with('thanh cong','xoa thanh cong');
            
    }
    public function getxoa($id)
    {

            $user = User::find($id); 
            $user->delete();
            return redirect('admin/user/danhsach')->with('thanhcong','xoa thanh cong');
    }

     public function getsanpham($id)
    {
        $sanpham = DB::table('dienthoai')->select('idDT','idLoai','TenDT','Gia','urlHinh')->where('idLoai',$id)->get();
        return view('page.product-full',compact('sanpham'));
    }
    public function getproductdetail($id)
    {
        $sanpham = DB::table('dienthoai')->select('idDT','idLoai','TenDT','Gia','urlHinh','MoTa','baiviet')->where('idDT',$id)->get();
        return view('page.product-detail',compact('sanpham'));
    }


}
