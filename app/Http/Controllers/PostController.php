<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post');
    }

     /**
     * ファイルアップロード処理
     */
       public function upload(Request $request) {

          //Function to set the user_id before validating, or

           // バリデーションチェック
           $request->validate([
           		'user_id' => 'required',
            	'comment' => 'nullable|max:200',
            	'image' => 'required|file|image|max:60000|mimes:jpeg,png,gif',
           ]);

           // 投稿内容の受け取って変数に入れる
           $user_id = Auth::user()->name; //Gets logged in user name.
           // $user_id = $request->input('user'); //manual input

           $comment = $request->input('comment');
           $image = base64_encode(file_get_contents($request->image->getRealPath()));

          Bbs::insert([
            "user_id" => $user_id,
            "comment" => $comment,
            "image" => $image
          ]); // データベーステーブルbbsに投稿内容を入れる


       }

}


