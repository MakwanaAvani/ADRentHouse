<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Property;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Prophecy\Prophet;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function usercount()
    {
        $userCount = User::count();
        $propertyCount=Property::count();
        $propertyCounthou=Property::where('cat_id','1')->count();
        $propertyCountapar=Property::where('cat_id','2  ')->count();
        return view('admin.dashboard', compact('userCount','propertyCount','propertyCounthou','propertyCountapar'));
    }
    public function user(Request $request)
    {
        $user = User::all();
        return view('admin.userinfo', ['user' => $user]);
    }
}
