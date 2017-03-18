<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\TicketFormRequest;
use App\Member;
use DB;
use Session;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
		return view('register');
	}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
		return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register_do(Request $request)
    {
		$user = DB::select('select * from member where account = :account  ', [':account'=>$_REQUEST["account"]]);
		if($user)
		{
			return redirect('/member_edit')->with('status', '这个帐号已经被人注册了');
		}
		$affected = DB::update('insert into  member set password = :password ,  account = :account  ',  [':password'=>$_REQUEST["password"],':account'=>$_REQUEST["account"]	]          );
		return redirect('/member_edit')->with('status', '注册成功');		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login_do(Request $request)
    {
//		print_r($_REQUEST);
//		exit;
		$user = DB::select('select * from member where account = :account and password = :password   ', [':account'=>$_REQUEST["account"],':password'=>$_REQUEST["password"]])[0];
//		print_r($user);
//		exit;
		if(! $user )
		{
//			echo "sdfsdfsd";
			return redirect('/login')->with('status', '帐号密码错误或无你的帐号');
//			exit;
		}
		else
		{
//			$request->session("is_login","Y"); 
//			$request->session("member_id",$user->id);
			$_SESSION['is_login'] = 'Y';
			$_SESSION["member_id"]=$user->id;
//			echo $_SESSION["is_login"];
//			exit;
//			session("is_login","Y");
//			session("member_id",$user->id);
			return redirect('/member_edit')->with('status', '登陆成功');		
		}
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
//		if($request->session("is_login")!= "Y" )
//		{
//			return redirect('/index');
//		}//$request->session("member_id")
		$member = DB::select('select * from member where id = :id   ', [':id'=>1])[0];
		return view('member_edit', compact('member'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function update(Request $request)
	{
//		echo $_REQUEST["id"];
//		print_r($request->post("id"));
		$affected = DB::update('update member set password = :password  where id = :id  ',  [':password'=>$_REQUEST["password"],':id'=>$_REQUEST["id"]	]          );
		return redirect("/member_edit")->with('status', '更新成功!');
	}	


}
