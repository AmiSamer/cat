<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember()
    {
        return view('admin.member.add-member');
    }

    public function saveMember(Request $request)
    {
        $mainImage = $request->file('main_image');
        $imageName = $mainImage->getClientOriginalName();
        $directory = 'public/admin/member-images/';
        $imageUrl = $directory.$imageName;
        $mainImage->move($directory,$imageName);


        $member = new Member();
        $member->full_name = $request->full_name;
        $member->introduction = $request->introduction;
        $member->main_image = $imageUrl;
        $member->email_address = $request->email_address;
        $member->phone_no = $request->phone_no;
        $member->status = $request->status;
        $member->save();
        return redirect('/add-member')->with('message','Member added successfully');
    }

    public function viewMember()
    {
        $members = Member::all();
        return view('admin.member.view-member',[
            'members'=>$members
        ]);
    }

    public function publishedMember($id)
    {
        $member = Member::find($id);
        $member->status = 0;
        $member->save();

        return redirect('/view-member');
    }

    public function unpublishedMember($id)
    {
        $member = Member::find($id);
        $member->status = 1;
        $member->save();

        return redirect('/view-member');
    }

    public function updateMember(Request $request)
    {
        $member = Member::find($request->id);
        $mainImage = $request->file('main_image');

        if ($mainImage)
        {
            unlink($member->main_image);
            $imageName = $mainImage->getClientOriginalName();
            $directory = 'public/admin/member-images/';
            $imageUrl = $directory.$imageName;
            $mainImage->move($directory,$imageName);

            $member->full_name = $request->full_name;
            $member->introduction = $request->introduction;
            $member->main_image = $imageUrl;
            $member->save();
        }
        else
        {
            $member->full_name = $request->full_name;
            $member->introduction = $request->introduction;
            $member->save();
        }

        return redirect('/view-member')->with('message','Member updated successfully');
    }

    public function deleteMember($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect('/view-member')->with('message','Member deleted successfully');
    }
}
