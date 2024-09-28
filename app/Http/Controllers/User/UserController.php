<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** 
   * 
   * @return response()
   */
  public function dashboard()
  {
      return view('welcome');
  }
}
