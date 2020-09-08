<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\CategoryDetail;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            ['dao-tao','Đào tạo'],
            ['thong-bao-chung','Thông báo chung'],
            ['tin-tuc','Tin tức'],
        ];
        foreach ($cats as $key => $item) {
            $cat = new Category();
            $cat->fill(['parent_id'=>0,'category_type'=>'post','alias'=>$item[0],'published'=>1])->save();
            $catdetail = new CategoryDetail();
            $catdetail->fill(['name'=>$item[1],'language'=>'vn','category_id'=>$cat->id])->save();
        }
        
    }
}
