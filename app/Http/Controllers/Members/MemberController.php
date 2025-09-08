<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

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

        $request->validate([
            'amount' => 'required|numeric|min:0.5',
            'currency' => 'required|string|size:3',
        ]);

        $fullName = trim((string) ($user->name ?? ''));
        $nameParts = preg_split('/\s+/', $fullName, -1, PREG_SPLIT_NO_EMPTY) ?: [];
        $firstName = $nameParts[0] ?? 'Member';
        $lastName = count($nameParts) > 1 ? implode(' ', array_slice($nameParts, 1)) : '';

        $paymentData = [
            'amount' => (float) $request->input('amount'),
            'currency' => strtoupper($request->input('currency')),
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => (string) ($user->email ?? ''),
            'meta' => [
                'user_id' => $user->id ?? null,
                'purpose' => 'membership_subscription',
            ],
        ];

        /** @var PaymentController $paymentController */
        $paymentController = app(\App\Http\Controllers\PaymentController::class);
        $result = $paymentController->startPayment($paymentData);

        if (!empty($result['success'])) {
            return redirect($result['checkout_url']);
        }

        return back()->withErrors($result['error'] ?? 'Unable to start payment');
    }

}
