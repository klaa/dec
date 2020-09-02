<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index(Request $request) {
        $numberOfItems = 10;
        $items = DB::connection('mysql2')->table("mvup0_mysite_giaovien")
                    ->join('mvup0_users','mvup0_mysite_giaovien.user_id','=','mvup0_users.id','inner')
                    ->whereRaw("mvup0_mysite_giaovien.user_id IN (SELECT user_id FROM mvup0_mysite_khoa_giaovien WHERE khoa_id=20)")
                    ->orderBy('mvup0_mysite_giaovien.ordering','desc')
                    ->paginate($numberOfItems);
        // dd($items);
        return view('classic.staff',compact('items'));
    }
}
