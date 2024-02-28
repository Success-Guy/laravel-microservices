<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

  public function index(){
    return User::all();
  }
  public function store(Request $request) {

    $data = $this->validate($request, [
      'firstName' => 'string|required',
      'lastName' => 'string|required',
      'email' => 'string|email|required',
    ]);
    $user  = User::create($data);
    ProcessUser::dispatch($user->toArray());

    return json_encode([
      "status" => "success",
      "message" => "The user was created successfully."
    ]);
  }
}
