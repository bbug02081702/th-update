<?php

namespace App\Http\Controllers;

use App\Models\Motels;
use App\Models\Districts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictsController extends Controller
{
    //
    public function flot(){
        return view('pages.charts.flot');
    }
     // hien thi motels moi dang nhat trang chu
     public function index(){
        $data = DB::table('motels')->orderBY('created_at', 'DESC')->paginate(2);
        //tìm kiếm theo title ở user trang chủ
        if($title=request()->title){
            $data = Motels::orderBy('created_at', 'DESC')->where('title','like', '%'.$title.'%')->get();
          }
        //tìm kiếm theo giá ở user trang chủ
        if($price=request()->price){
            $data = Motels::orderBY('created_at', 'DESC')->where('price', 'like' , '%'.$price.'%')->get();
        }
        return view('home.index',compact('data'));
     }
    //hien thi danh sach manager quản lý motels
     public function show(){
      $data = Motels::orderBy('created_at', 'DESC')->paginate(2);
      //tim kiem theo title 
      if($key=request()->key){
        $data = Motels::orderBy('created_at', 'DESC')->where('title','like', '%'.$key.'%')->paginate(2);
      }
      return view('auth.admin',compact('data'));
     }

     public function create(){
      return view('auth.add');
     }

     public function story(Request $request){
      $data = Motels::create($request->all());
      // dd($data);
      return redirect()->route('admin')->with('Thongbao', 'Them thanh cong');
     }

     public function edit($id){
        $data = Motels::find($id);
        return view('auth.edit',compact('data'));
     }

     public function update(Request $request, $id){
         $data = Motels::find($id);
         $data->update($request->all());
         return redirect()->route('admin')->with('Thongbao', 'Cap nhat motel thanh cong');
     }

     public function destroy($id){
         $data = Motels::find($id);
         $data->delete();
         return redirect()->route('admin')->with('Thongbao', 'Xoa motels thanh cong');
     }
}
