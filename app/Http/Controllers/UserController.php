<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // hien thi thong tin user 
    public function index(){
        $users = DB::table('users')->paginate(3);
        return view('admin.manageraccount.index', compact('users'));
    }

    // them user 
    public function create(){
        return view('admin.manageraccount.add');
    }
    // xu ly them nguoi dung

    public function store(Request $request){
       //xu ly validate khi nguoi dung nhap vao form add user
       $validated = $request->validate([
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'role' => 'required',
       ]);
       $users = User::create($request->all());
       return redirect()->route('manager/user')->with('Thongbao', 'Them user thanh cong');
    }

    // xu ly edit user
       public function edit($id){
        $users = User::find($id);
        return view('admin.manageraccount.edit', compact('users'));
       }
    // xu ly edit user sau khi da cap nhat
       public function update(Request $request, $id){
         $users = User::find($id);
        //  dd($users);
         $users->update($request->all());
         return redirect()->route('manager/user')->with('Thongbao', 'Sua thanh cong user');
       }
    // xu ly xoa user
      public function destroy($id){
         $users = User::find($id);
         $users->delete();
         return redirect()->route('manager/user')->with('Thongbao', 'Xoa thanh cong user');
      }
}
