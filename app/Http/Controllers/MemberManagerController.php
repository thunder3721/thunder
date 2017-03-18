<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\TicketFormRequest;
use App\Member;

class MemberController extends Controller
{
	
    public function index($slug)
    {
	    $ticket = Ticket::whereSlug($slug)->firstOrFail();
		return view('member_edit', compact('ticket'));
	}	


	public function add($slug)
    {
	    $ticket = Ticket::whereSlug($slug)->firstOrFail();
		return view('member_edit', compact('ticket'));
	}	
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_do(Request $request)
    {
		$slug = uniqid();
		
		$user = DB::select('select * from users where id = :id', [':id'=>1]);
		redirect('/contact')->with('status', '这个帐号已经被人注册了');
		
		$ticket = new Ticket(array(
			'account' => $request->get('account'),
			'password' => $request->get('password'),
			'slug' => $slug
		));
	
		$ticket->save();
	
		return redirect('/contact')->with('status', '注册成功');		
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
		if($request->session("is_login")!= "Y" )
		{
			redirect('/index');
		}
	    $ticket = Ticket::whereSlug($slug)->firstOrFail();
		return view('member_edit', compact('ticket'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function update_do($slug, TicketFormRequest $request)
	{
		$affected = DB::update('update users set account= :account ,  password = :password  where no = :no  ',  [':password'=>$request->post("password"),':account'=>$request->post("account"),':no'=>$request->post("no")	]          );
		return redirect("/member_edit")->with('status', '更新成功!');
	}	


}
