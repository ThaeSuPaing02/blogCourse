<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //dashboard
    public function dashboard()
    {$course = Course::get();
        $category = Category::get();
        // dd($course->toArray());

        return view('welcome', compact('course', 'category'));
    }
    //change password page
    public function changePasswordPage()
    {

        return view('user.password.change');
    }

    //change password
    public function changePassword(Request $request)
    {
        $this->passwordValidationCheck($request);
        $userId = Auth::user()->id;
        $user = User::select('password')->where('id', $userId)->first();
        $dbPassword = $user->password; //hash value

        if (Hash::check($request->oldPassword, $dbPassword)) {
            $data = [
                'password' => Hash::make($request->newPassword),
            ];
            User::where('id', Auth::user()->id)->update($data);
            return back()->with(['changeSuccess' => 'Password Changed...']);

        }
        return back()->with(['notMatch' => 'The Old Password Not Match.Try Again!']);

    }

    //password validation check
    private function passwordValidationCheck($request)
    {
        Validator::make($request->all(), [
            'oldPassword' => 'required | min:6',
            'newPassword' => 'required | min:6',
            'confirmNewPassword' => 'required | min:6 | same:newPassword',

        ])->validate();
    }
}
