<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function index()
  {
    return view('content.user.table');
  }

  public function create()
  {
    return view('content.user.form', ['user' => new User()]);
  }

  public function edit($id)
  {
    $user = User::findOrFail($id);

    return view('content.user.form', ['user' => $user]);
  }

  public function change_status($id)
  {
    $user = User::find($id);

    if ($user->status == 1) {
      $user->status = 0;
    } else {
      $user->status = 1;
    }

    $user->save();

    return redirect()->back();
  }
}
