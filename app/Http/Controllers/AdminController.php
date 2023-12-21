<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
USE DB;
class AdminController extends Controller
{
    public function index(){
		return view('admin.login');
    }
    public function show_dashboard(){
    	return view('admin.dashboard');
    }
    public function show_product(){
    	return view('admin.product');
    }
}
