<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        $pagesize = 5;
        $searchData = $request->except('page');
        
        if(count($request->all()) == 0){
            // Lấy ra danh sách sản phẩm & phân trang cho nó
            $users = User::paginate($pagesize);
        }else{
            $userQuery = User::where('name', 'like', "%" .$request->keyword . "%");

            if($request->has('order_by') && $request->order_by > 0){
                if($request->order_by == 1){
                    $userQuery = $userQuery->orderBy('name');
                }else{
                    $userQuery = $userQuery->orderByDesc('name');
                }
            }
            $users = $userQuery->paginate($pagesize)->appends($searchData);
        }
        // trả về cho người dùng 1 giao diện + dữ liệu users vừa lấy đc 
        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function addForm(){
        return view('admin.user.add-form');
    }

    public function saveAdd(Request $request){
        $model = new User();
        
        $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'password' => 'required|min:6|max:32',
                'cfpassword' => 'required|same:password|'
            ],
            [
                'name.required' => "Hãy nhập vào tên",
                'email.required' => "Hãy nhập email",
                'email.email' => "Không đúng định dạng email",
                'password.required' => "Hãy nhập mật khẩu",
                'password.min' => "Mật khẩu phải hơn 6 ký tự",
                'password.max' => "Mật khẩu phải dưới 32 ký tự",
                'cfpassword.required' => "Hãy nhập xác nhận mật khẩu",
                'cfpassword.same' => "Mật khẩu xác nhận không giống mật khẩu"
            ]
        );

        $model->fill($request->all());
        // upload ảnh
        if($request->hasFile('uploadfile')){
            $model->avatar = $request->file('uploadfile')->storeAs('uploads/users', uniqid() . '-' . $request->uploadfile->getClientOriginalName());
        }
        //$model->password = bcrypt($request->password);
        $model->password = Hash::make($request->password);
        $model->save();
        return redirect(route('user.index'));
    }

    public function remove($id){
        User::destroy($id);
        return redirect()->back();;
    }

    public function editForm($id){
        $model = User::find($id);
        if(!$model){
            return redirect()->back();
        }
        return view('admin.user.edit-form', compact('model'));
    }

    public function saveEdit($id, Request $request){
        $model = User::find($id);

        if(!$model){
            return redirect()->back();
        }

        $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'password' => 'required|min:6|max:32',
                'cfpassword' => 'required|same:password|'
            ],
            [
                'name.required' => "Hãy nhập vào tên",
                'email.required' => "Hãy nhập email",
                'email.email' => "Không đúng định dạng email",
                'password.required' => "Hãy nhập mật khẩu",
                'password.min' => "Mật khẩu phải hơn 6 ký tự",
                'password.max' => "Mật khẩu phải dưới 32 ký tự",
                'cfpassword.required' => "Hãy nhập xác nhận mật khẩu",
                'cfpassword.same' => "Mật khẩu xác nhận không giống mật khẩu"
            ]
        );

        $model->fill($request->all());
        $model->password = Hash::make($request->password);
        // upload ảnh
        if($request->hasFile('uploadfile')){
            $model->avatar = $request->file('uploadfile')->storeAs('uploads/users', uniqid() . '-' . $request->uploadfile->getClientOriginalName());
        }
        $model->save();

        return redirect(route('user.index'));
    }
}
