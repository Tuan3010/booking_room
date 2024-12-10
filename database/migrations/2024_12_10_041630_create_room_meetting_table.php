<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('room_meetting', function (Blueprint $table) {
            $table->id(); // ID phòng họp
            $table->string('name'); // Tên phòng họp
            $table->string('location'); // Vị trí phòng
            $table->integer('capacity'); // Sức chứa
            $table->text('equipment')->nullable(); // Danh sách thiết bị
            $table->enum('availability', ['available', 'booked', 'maintenance'])->default('available'); // Trạng thái phòng
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_meetting');
    }
};
