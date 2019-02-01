<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;

class ContactController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Contact()
    {
    	return view('contact');
    }
    public function AddContact()
    {
    	return view('addcontact');
    }

     public function ShowContact()
    {
    	$contact=DB::table('contacts')->get();
    	return view('contact')->with('datashow',$contact);
    }
    public function Insert(Request $request)
    {
    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;

    	$ins=DB::table('contacts')->insert($data);
        if ($ins) {
                 $notification=array(
                 'messege'=>'Successfully Contact Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('show.contact')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }   
    }

    public function Delete($id)
    {
    	$delete=DB::table('contacts')->delete($id);
        if ($delete) {
                 $notification=array(
                 'messege'=>'Successfully Contacts Deleted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }               
    	
    }
    public function View($id)
    {
    	$view=DB::table('contacts')->where('id',$id)->first();
    	return view('view', compact('view'));
    }
    public function Edit($id)
    {
    	$edit=DB::table('contacts')->where('id',$id)->first();
    	return view('editcontact', compact('edit'));
    }
    public function Update(Request $request,$id)
    {
    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;
    	$upd=DB::table('contacts')->where('id',$id)->update($data);
    	return Redirect()->route('show.contact');
    }
}
