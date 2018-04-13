<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('users.index')->with(compact('users'));
    }

    public function sample2(){
    	return view('users.sample2');
    }
}
