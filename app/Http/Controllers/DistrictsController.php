<?php

namespace App\Http\Controllers;

use App\Models\Motels;
use Illuminate\Http\Request;

class DistrictsController extends Controller
{
    //
     public function index(){
        return view('motel.index');
     }

     public function show(){
      $data = Motels::paginate(5);
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
