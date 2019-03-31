<?php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Model\Bbs;
   use Illuminate\Support\Facades\Auth;
  
   class BbsController extends Controller
   {
       // Indexページの表示
       public function index() {

           $bbs = Bbs::Orderby('id', 'desc')->simplePaginate(10); // paginate into 10 per page.
           // $bbs = Bbs::all(); 

           return view('bbs.index', ["bbs" => $bbs]); // bbs.indexにデータを渡す
       }

       // 投稿された内容を表示するページ
       public function create(Request $request) {

          //Function to set the user_id before validating, or

           // バリデーションチェック
           $request->validate([
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


          return redirect('/bbs');

      }




       public function delete()
       {
        $user = Auth::user()->id; //Gets logged in id.
        $post = Bbs::where('user_id', $user)->first();  //

        if($post) {

            $delete = Bbs::delete()->$post;


        return view('bbs/delete', $delete);

       }
     }
   }