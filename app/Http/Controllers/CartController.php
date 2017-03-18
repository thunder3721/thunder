<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Http\Requests\TicketFormRequest;
use App\Cart;
use DB;
class CartController extends Controller
{
    public function index()
    {
		$aCart = DB::select('select c.*,p.name from cart as c inner join product as p on c.product_id = p.id
where member_id= :member_id  ', [':member_id'=>1]);
 		return view('Cart', compact('aCart'));
	}

    public function add(Request $request)
    {
		/*
	    if(!empty($request->session('member_id')))
		{
			return redirect('/login')->with('status', '请先登陆!');		
		}
		*/
		$affected = DB::update('insert into  cart set member_id = :member_id ,number=1, product_id = :product_id  ',  [':member_id'=>1,':product_id'=>1	]          );
		return redirect('/cart')->with('status', '加入购物车成功!');		
    }
     function delete($id)
	{//$_REQUEST["id"]
		$affected = DB::delete('delete from cart where id = :id  ',  [':id'=>1	]          );
		return redirect('/cart')->with('status', '删除成功!');
	}
	 
	
}
