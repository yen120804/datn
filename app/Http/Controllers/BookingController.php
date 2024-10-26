<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function booking(Request $request)
    {
        // Kiểm tra người dùng đã đăng nhập hay chưa
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập trước khi đặt lịch.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'package_id' => 'required|exists:packages,id', // Thay đổi ở đây
            'date_time' => 'required|date',
            'message' => 'nullable|string',
        ]);

        // Tạo một bản ghi mới trong bảng booking
        Booking::create([
            'user_id' => Auth::id(), // Lấy ID người dùng đã đăng nhập
            'service_id' => $request->service_id, // Cần có trường này từ form
            'package_id' => $request->package_id, // Thay đổi ở đây            
            'appointment_datetime' => \Carbon\Carbon::parse($request->date_time),
            'status' => 'pending',
        ]);

        return redirect()->route('booking.index')->with('success', 'Đặt lịch thành công!');
    }
}
