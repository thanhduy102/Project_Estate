<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id'); //Khóa chính

            $table->string('Ho',20);
            $table->string('Ten',20);
            $table->string('email',255)->unique();
            $table->string('Phone',11);
            $table->string('DiaChi',100);
            $table->string('GioiTinh',10);
            $table->bigInteger('SoTien')->unsigned()->default(50000);
            $table->string('AnhAvatar',255)->nullable();
            $table->string('password',255);
            $table->dateTime('ThoiGianTao')->nullable();
            $table->dateTime('ThoiGianSua')->nullable();
            $table->dateTime('ThoiGianXoa')->nullable();
            $table->tinyInteger('HienThi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
