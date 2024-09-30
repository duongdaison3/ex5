<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function register(Request $request)
  {
    $request->validate([
      'username' => 'required|string|max:50|unique:users,username',
      'password' => 'required|string|max:100',
      'fullname' => 'required|string|max:100',
      // 'image' => 'nullable|image|mines:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = new User();
    $user->username = $request->username;
    $user->password = password_hash($request->password, PASSWORD_DEFAULT);
    $user->fullname = $request->fullname;
    if ($request->hasFile('image')) {
      $imagePath = $request->file('image')->store('profile_images', 'public');
      $user->image = $imagePath;
    }
    
    $user->save();

    $request->session()->put('user_id', $user->id);

    return redirect()->route('show', ['id' => $user->id])
        ->with('message', 'User registered successfully!');

    // return response()->json([
    //   'message' => 'User registered successfully',
    // ], 201);
  }

  public function index() {
    $users = User::all();
    return view('index', ['users' => $users]);
  }

  public function show($id) {
    $user = User::find($id);
    return view('show', ['user' => $user]);
  }

  public function login(Request $request) {
    $request->validate([
      'username' => 'required',
      'password' => 'required',
    ]);

    $user = User::where('username', $request->username)->first();

    if ($user && password_verify($request->password, $user->password)) {
      $request->session()->put('user_id', $user->id);

      return redirect()->route('show', ['id' => $user->id])
          ->with('message', 'User logged in successfully!');
    } else {
      return redirect()->back()->with('error', 'Invalid username or password');
    }
  }
  
  public function logout(Request $request) {
    $request->session()->forget('user_id');

    return redirect()->route('login');
  }
}
