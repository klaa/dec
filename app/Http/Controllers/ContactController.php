<?php

namespace App\Http\Controllers;

use App\Mail\LienHe;
use App\Mail\YeuCauTuVan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function tvts(Request $request) {
        //Validate
        $request->validate([
            'tvtsten'  => 'required|string',
            'tvtssdt'   => 'required|string',
            'tvtsnganh' => 'nullable',
            'tvtsdiachi'=> 'nullable'
        ]);
        //Send 
        Mail::to('khanhnh@tnu.edu.vn')->send(new YeuCauTuVan($request->only(['tvtsten','tvtssdt','tvtsnganh','tvtsdiachi'])));

        return redirect()->route('home')->with('message','Cảm ơn bạn quan tâm đến chương trình ! Chúng tôi sẽ trả lời sớm nhất có thể.');
    }
    public function contact(Request $request) {
        //Validate
        $request->validate([
            'name'      => 'required|string',
            'phone'     => 'required|string',
            'message'   => 'required|string',
        ]);
        //Send 
        Mail::to('khanhnh@tnu.edu.vn')->send(new LienHe($request->only(['name','phone','message'])));

        return redirect()->route('contact')->with('message','Cảm ơn bạn liên hệ! Chúng tôi sẽ trả lời sớm nhất có thể.');   
    }
}
