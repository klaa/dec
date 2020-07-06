<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Nguyễn Hữu Khánh',
            'username'  => 'nguyenkhanh87',
            'email'     => 'nguyenkhanh87@gmail.com',
            'password'  => Hash::make("!@#quanly#@!"),
        ]);

        DB::table('user_group')->insert([
            'user_id' => 1,
            'group_id' => 1,
        ]);
        
        $canbo = [
            ['PGS.TS Nguyễn Hữu Công','conghn','conghn@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['TS. Trương Hữu Dũng','thdung','thdung@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['TS. Đoàn Đức Hải','haidd','haidd@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Dương Thị Kim Thu','duongkimthu','duongkimthu@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['TS. Phùng Đức Hoàn','phungduchoan','phungduchoan@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Ngô Thị Vân','vannt','van.nt@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Bùi Thị Thu Trí','buitridec','buitri.dec@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Nguyễn Thị Giang','nguyengiangdttx','nguyengiangdttx@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Đỗ Thị Hoài Thu','dothu91','dothu91@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Đỗ Huyền Trang','huyentrang','huyentrang@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Bế Nhật Minh','minhbn','minhbn@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Nguyễn Thị Bích Diệp','bichdiep','bichdiep@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Nguyễn Thị Đan Phượng','danphuong','danphuong@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Trương Cao Dũng','truongcaodung','truongcaodung@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Hà Minh Tuấn','haminhtuan','haminhtuan@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Lý Thị Nhiên','lynhien','lynhien@tnu.edu.vn',Hash::make("ttdttxdhtn")],
            ['Trần Trang','trantrang','trantrang.dttx@gmail.com',Hash::make("ttdttxdhtn")],
        ];
        foreach ($canbo as $key => $value) {
            DB::table('users')->insert([
                'name'      => $value[0],
                'username'  => $value[1],
                'email'     => $value[2],
                'password'  => $value[3],
            ]);
        }
    }
}
