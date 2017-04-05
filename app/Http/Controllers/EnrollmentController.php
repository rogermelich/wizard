<?php

namespace App\Http\Controllers;

use Acacha\Stateful\Exceptions\IllegalStateTransitionException;
use App\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function user(Request $request)
    {
        dd($request->input);
        $enrollment = new Enrollment();
        $enrollment->user_id = $request->input('user');
        $enrollment->state = 'step1';
        $enrollment->save();
        try {
            $enrollment->step1step2();
        } catch (IllegalStateTransitionException $e) {
            return ['status' => 'Error saving user IllegalStateTransitionException!'];
        }
        return ['status' => 'User saved!'];
    }
}
