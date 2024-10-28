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
            'image' => 'default.jpg', // Gán giá trị mặc định
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        User::create([
            'name' => $request->name,
            'phone' => $request->phone, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => 'default.jpg',
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


     public function profile(Request $request)
    {
        return view('profile');
    }
    public function edit_profile($id)
    {
        $profile = User::find($id);
        
        if ($profile) {
            return view('updateprofile', compact('profile'));
        } else {
            return redirect()->route('profile')->with('error', 'Không tìm thấy .');
        }
    }
    public function update_profile(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $profile = User::find($id);

    if ($profile) {
        $data = $request->only(['name', 'phone']);

        // Xử lý upload ảnh mới nếu có
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($profile->image && file_exists(public_path('upload/' . $profile->image))) {
                unlink(public_path('upload/' . $profile->image));
            }

            // Lưu ảnh mới
            $image = $request->file('image');
            $imageName = uniqid() . '_' . $image->getClientOriginalName();
            $image->move(public_path('upload'), $imageName);
            $data['image'] = $imageName;
        }

        $profile->update($data);

        return redirect()->route('profile')->with('success', 'Cập nhật thành công.');
    } else {
        return redirect()->route('profile')->with('error', 'Không thành công.');
    }
}


    
}
