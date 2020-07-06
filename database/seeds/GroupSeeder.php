<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert(['name'=>'Super User','alias'=>'super-user']);
        DB::table('groups')->insert(['name'=>'Phòng Khảo thí','alias'=>'phong-khao-thi']);
        DB::table('groups')->insert(['name'=>'Phòng Tuyển sinh','alias'=>'phong-tuyen-sinh']);
        DB::table('groups')->insert(['name'=>'Phòng Đào tạo','alias'=>'phong-dao-tao']);
        DB::table('groups')->insert(['name'=>'Phòng Tổng hợp','alias'=>'phong-tong-hop']);
        DB::table('groups')->insert(['name'=>'Học viên','alias'=>'hoc-vien']);
        DB::table('groups')->insert(['name'=>'Đăng kí','alias'=>'dang-ki']);
    }
}
