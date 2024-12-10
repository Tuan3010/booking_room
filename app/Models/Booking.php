<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Tên bảng (mặc định Laravel sử dụng tên số nhiều nên không cần đổi)
    protected $table = 'bookings';

    // Các cột được phép gán giá trị
    protected $fillable = [
        'user_id',
        'room_id',
        'start_time',
        'end_time',
        'purpose',
        'status',
    ];

    // Quan hệ với bảng Users (Một lịch đặt thuộc về một người dùng)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Quan hệ với bảng Rooms (Một lịch đặt thuộc về một phòng họp)
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
