<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Http\Requests\TicketFormRequest;
use App\Cart;

class TicketsController extends Controller
{
    public function index()
    {
		$aCart = Cart::all();
		return view('Cart.index', compact('aCart'));
	}

    public function add(Request $request)
    {
		$slug = uniqid();
		$ticket = new Ticket(array(
			'member_id' => $request->session('member_id'),
			'product_id' => $request->get('product_id'),
		));
		$ticket->save();
	
		return redirect('/contact')->with('status', '加入购物车成功!');		
    }
  function delete($id)
	{
		$ticket = Ticket::whereSlug($id)->firstOrFail();
		$ticket->delete();
		return redirect('/tickets')->with('status', '删除成功!');
	}
	 
	
}
