<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
}
