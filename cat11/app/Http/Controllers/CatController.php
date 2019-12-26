<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Member;
use Illuminate\Http\Request;
use Session;

class CatController extends Controller
{
    public function index()
    {
       return view('public.home.home');
    }

    public function blog()
    {
        $blogs = Blog::where('status',1)->get();
        return view('public.blog.blog',[
            'blogs'=>$blogs
        ]);
    }

    public function contactUs(Request $request)
    {
       $contact = new Contact();
       $contact->first_name = $request->first_name;
       $contact->last_name = $request->last_name;
       $contact->email = $request->email;
       $contact->phone_no = $request->phone_no;
       $contact->subject = $request->subject;
       $contact->msg = $request->msg;
       $contact->save();

       Session::put('customerId',$contact->id);
       Session::put('customerName',$contact->first_name.' '.$contact->last_name);

       return redirect('/reply');
    }

    public function replyTo()
    {
        return view('public.answer.answer');
    }


    public function member()
    {
        $members = Member::where('status',1)->get();
        return view('public.member.member',[
            'members'=>$members
        ]);
    }
}
