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
        Mail::to('nguyenkhanh87@gmail.com')->send(new YeuCauTuVan($request->only(['tvtsten','tvtssdt','tvtsnganh','tvtsdiachi'])));

        return redirect()->route('home');
    }
    public function contact(Request $request) {
        //Validate
        $request->validate([
            'name'      => 'required|string',
            'phone'     => 'required|string',
            'message'   => 'required|string',
        ]);
        //Send 
        Mail::to('nguyenkhanh87@gmail.com')->send(new LienHe($request->only(['name','phone','message'])));

        return redirect()->route('contact');   
    }
}