<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use App\Models\Order;
use App\Models\Item_Order;


class IndexController extends Controller
{
    /* 
        Index Page Functions

        Description：
            The purpose of the index page is to add items to the shopping cart.
    */
    public function viewIndex() {
        $items = Item::all();
        return view('pages.index', ['items' => $items]);
    }

    public function vvv(Request $request){
        return redirect(route('order.view'));
    }
    
    public function newOrder(Request $request) {
        // 建立訂單資料
        $order_data = $request->validate([
            'qty' => 'required',
            'date' => 'required',
            'user_id' => 'required',
        ]);

        // 建立 include 關係資料
        // $item_order_data = $request->validate([
        //     'include_item_id' => 'required',
        //     'include_user_id' => 'required',
        //     'include_order_id' => 'required',
        // ]);

        $new_order = Order::createWithBag($order_data);
        // $new_item_order = Item_Order::create($item_order_data);
        return redirect(route('order.view'));
    }

}
