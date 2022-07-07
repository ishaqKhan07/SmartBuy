<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){
        $sellers = Seller::all();
        return view('admin.sellers.index',compact('sellers'));
    }
}
