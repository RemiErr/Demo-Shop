<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\RelInclude;

class ShopController extends Controller
{
    public function viewIndex() {
        return view('index', [
                    'products' => Product::all(),
                    'users' => User::all()
        ]);
    }

    public function newOrder(Request $re) {
        // dd($re);

        foreach ($re->input('products') as $rPd) {
            // dd($rPd);
            if($rPd['num'] > 0) {
                $oLast = Order::create([
                    'date' => $rPd['date'],
                    'user_id' => $rPd['user_id']
                ]);
                
                RelInclude::create([
                    'num' => $rPd['num'],
                    'order_id' => $oLast->getAttributes()['id'],
                    'product_id' => $rPd['id']
                ]);
            }
        }

        return redirect(route('index.view'));
    }
}
