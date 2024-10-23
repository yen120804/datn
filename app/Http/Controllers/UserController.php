<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showRegisterForm()
    {
        return view('register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        User::create([
            'name' => $request->name,
            'phone' => 0, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => 0, 
            'role' => 0, // Đăng ký bình thường thì role là 0
        ]);
    
        return redirect()->route('login')->with('success', 'Đăng ký thành công.');
    }
    
    public function showLoginForm()
    {
        return view('login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            
            if ($user->role == 1) {
                return redirect()->route('admin')->with('success', 'Đăng nhập thành công.');
            } else {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công.');
            }
        } else {
            return redirect()->back()->with('error', 'Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin.');
        }
    }
    

    // Xử lý đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'Đăng xuất thành công.');
    }
    function forgot(){
        return view('forgot');
    }
    
    
}
