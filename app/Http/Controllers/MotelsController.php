<?php

namespace App\Http\Controllers;

use App\Models\Motels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MotelsController extends Controller
{
    // show home detail
    public function index(){
        return view('home.index');
    }
    //register user
    public function register(){
        return view('home.dangky');
    }
    // motels views
    public function motelviews($id){
        $post = Motels::find($id);
        $update = ['count_view' =>$post->count_view + 1,];
        Motels::where('id',$post->id)->update($update);

        $motels_view = DB::table('motels')->where('id',$id)->get();
        return view('motel.index',compact('motels_view'));
    }

    //search by title
    // public function searchNameMotels(Request $request){
    //     if($request->title){
    //         $row = DB::table('motels')
    //         ->select('motels.*')
    //         ->where('motels.title', 'LIKE' , '%'.$request->title.'%') 
    //         ->get(); 
    //     }
    //     return view('home.index',compact('row'));
    // }

}
