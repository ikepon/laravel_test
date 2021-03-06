<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index() {
      $items = DB::table('people')->get();
      return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request) {
      return view('hello.index',['msg' => $request->msg]);
    }
}
