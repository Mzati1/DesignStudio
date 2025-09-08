<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;

class MemberController extends Controller
{
    // Show all members (admin use)
    public function index()
    {
        return Member::with('user')->paginate(20);
    } 

    // Show single member
    public function show(Member $member)
    {
        return $member->load('user', 'payments');
    }

    // Deactivate a member
    public function deactivate(Member $member)
    {
        $member->update(['status' => 'inactive']);

        return response()->json(['message' => 'Member deactivated']);
    }

    // Register ( make the payment and make them a member - may separete business logic maybe )
    public function subscribeMembership(Request $request)
    {
        // get user details ( for payment )
        $user = $request->user();
    }
    
}
