<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $totalorders = Order::get()->count();
        $pending = Order::where('status','=', 'pending')->get()->count();
        $pendingorders = Order::where('status','=', 'pending')->get();
        $cancel = Order::where('status','=', 'cancel')->get()->count();
        $complete = Order::where('status','=', 'complete')->get()->count();
        return view('admin/index', compact('totalorders','pending','complete','cancel','pendingorders'));
    }
    // Order
    public function ordersIndex()
    {
        return view('admin/orders/index');
    }

    // Customers
    public function customersIndex()
    {
        return view('admin/customer/index');
    }
    
}

