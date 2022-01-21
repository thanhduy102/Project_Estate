<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_tin', function (Blueprint $table) {
            $table->bigIncrements('idLoaiTin'); //Khóa chính

            $table->string('LoaiTin',50)->nullable();
            $table->bigInteger('GiaTien')->unsigned()->nullable();
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
        Schema::dropIfExists('loai_tin');
    }
}
