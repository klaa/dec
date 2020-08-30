<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Partner;
use Illuminate\Http\Request;
use stdClass;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.partners.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'link'          => 'required',
            'image'         => 'required',
            'description'   => 'nullable|string',
            'published'     => 'nullable|numeric',
            'ordering'      => 'nullable|numeric',    
        ]);
        $partner = new Partner($validatedData);
        if($partner->save()) {
            $msg = __('admin.update_partner_success');
            $msg_type = 'success';
        }else{
            $msg = __('admin.action_failed');
            $msg_type = 'error';
        }
        $routename = 'admin.partners.index';
        $param = [];
        if($request->task=='save') {
            $routename = 'admin.partners.edit';
            $param  = $partner;
        }
        return redirect()->route($routename,$param)->with($msg_type,$msg);    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('admin.partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $validatedData = $request->validate([
            'link'          => 'required',
            'image'         => 'required',
            'description'   => 'nullable|string',
            'published'     => 'nullable|numeric',
            'ordering'      => 'nullable|numeric',    
        ]);
        if($partner->update($validatedData)) {
            $msg = __('admin.update_partner_success');
            $msg_type = 'success';
        }else{
            $msg = __('admin.action_failed');
            $msg_type = 'error';
        }
        $routename = 'admin.partners.index';
        $param = [];
        if($request->task=='save') {
            $routename = 'admin.partners.edit';
            $param  = $partner;
        }
        return redirect()->route($routename,$param)->with($msg_type,$msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        if($partner->delete()) {
            $message = __('admin.partner_deleted');
            $message_state = 'success';
        }else{
            $message = __('admin.action_failed');
            $message_state = 'error';
        }
        return redirect()->route('admin.partners.index')->with($message_state,$message);
    }

    /**
     * Prepare data for datatable ajax request
     * @return JSON 
     */
    public function getDatatable() {
        $user = auth()->user();
        $params = [];
        $items = Partner::get();
        $items = $items->map(function($item) {
            $name   = '<a href="'.route('admin.partners.edit',$item).'">'.$item->link.'</a>';
            $image  = '<img class="img-thumbnail" alt="'.$item->description.'" title="'.$item->description.'" src="'.asset($item->image).'" height="30">';
            if($item->published) {
                $pbtn = '<a href="'.route('admin.partners.publish',$item).'" class="text-success"><i class="far fa-check-circle"></i></a>';
            }else{
                $pbtn = '<a href="'.route('admin.partners.publish',$item).'" class="text-danger"><i class="far fa-times-circle"></i></a>';
            }
            $action = '<a href="'.route('admin.partners.edit',$item).'" class="btn btn-info btn-sm"><i class="far fa-edit fa-sm"></i></a> <a data-action="'.route('admin.partners.destroy',$item).'" href="#deleteModal" data-toggle="modal" class="btn btn-danger btn-sm deleteButton"><i class="fas fa-trash fa-sm"></i></a>';
            return [$item->id,$image,$name,$item->description,$pbtn,$action];
        });
        $response = new stdClass;
        $response->data = $items;
        return response(json_encode($response))->header('Content-Type', 'application/json');
    }

    /**
     * Change published status of user
     * @param App\Post
     * @return View
     */
    public function publish(Partner $partner) {
        if($partner->published) {
            $partner->published = 0;
        }else{
            $partner->published = 1;
        }
        if($partner->save()) {
            $message = __('admin.partner_publish_changed');
            $message_state = 'success';
        }else{
            $message = __('admin.action_failed');
            $message_state = 'error';
        }
        return redirect()->route('admin.partners.index')->with($message_state,$message);
    }
}
