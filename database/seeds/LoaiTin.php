<?php

use Illuminate\Database\Seeder;

class LoaiTin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_tin')->delete();
        DB::table('loai_tin')->insert([
            ['idLoaiTin'=>1,'LoaiTin'=>'Tin thường','GiaTien'=>20000],
            ['idLoaiTin'=>2,'LoaiTin'=>'Tin VIP','GiaTien'=>50000],
        ]);

    }
}
