<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Model\Bbs;
	use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
	public function index($name) {

		//Choose all where user_id = url slugname /user/xxxx/ (xxxx=$name)
		$bbs = Bbs::all()->where('user_id', $name); 

		//return $bbs to userpage.blade.php
        return view('userpage', ["bbs" => $bbs]); // bbs.indexにデータを渡す

	}
}
